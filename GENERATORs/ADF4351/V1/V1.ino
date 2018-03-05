
//============================================   3.3V ONLY ===================================================================================================================
//============================================   3.3V ONLY ===================================================================================================================
//============================================   3.3V ONLY ===================================================================================================================
//============================================   3.3V ONLY ===================================================================================================================

// ADF4351 PLL-Synthesizer 33Mhz - 4,4Ghz
// Integer mode Demo OE6OCG 1/2015
// up/down = Freq +- with stepsize
// left = frequency step's from 6.25khz to 1Mhz
/*
         ============================================   3.3V ONLY ===================================================================================================================
         ============================================   3.3V ONLY ===================================================================================================================
         ============================================   3.3V ONLY ===================================================================================================================
         ============================================   3.3V ONLY ===================================================================================================================
         ============================================   3.3V ONLY ===================================================================================================================
         ============================================   3.3V ONLY ===================================================================================================================
   MOSI 11 ----> DATA
   MISO 12 ---- null, but d12 is SPI
   SCK 13 -----> CLK
   d10 no connect, but SPI
   d3----------> LE
   LD = lock detect



    ENCODER add
    if Freq>4.4GHz stop ++
    if Freq < 35Mhz stop --


     int8_t      |  char                       |   от -128 до 127
  uint8_t    |  byte, unsigned char |   от 0 до 255
  int16_t    |  int                          |   от -32768 до 32767
  uint16_t  |  unsigned int, word   |   от 0 до 65535

  int32_t    |  long                        |  от  -2147483648 до 2147483647
  uint32_t  |  unsigned long          |  от 0 до 4294967295

*/

//============================================================= ADF4351 =========================================
#include <SPI.h>
#define ADF4351_ss_pin 3 //SPI-SS enable ADF4351
uint32_t ADF4351_referenceFreq = 2500000L; //*10 Hz reference frequency = quartz 25 MHz
uint32_t ADF4351_frequency = 43392000L; //*10 Hz = 433 MHz
uint32_t ADF4351_freqStepCurrent = 0L;
uint32_t ADF4351_stepsVariants[7] = {
  625, //*10Hz 6,25 khz, 5khz does not work in Int-N mode (MOD> 4095) at 25Mhz Ref.
  1000, //*10Hz 10 khz
  1250, //*10Hz 12.5 khz
  2500, //*10Hz 25 khz
  100000, //*10Hz 1 Mhz
  1000000, //*10Hz 10 Mhz
  10000000 //*10Hz 100 Mhz
};
uint8_t ADF4351_stepsVariantsNumCurrent = 0;
String OLED_stepsVariants_val[7] = {"6.25", "10", "12.5", "25", "1", "10", "100"};
String OLED_stepsVariants_kmhz[7] = {"kHz", "kHz", "kHz", "kHz", "MHz", "MHz", "MHz"};

uint8_t ADF4351_lowNoiseOrSpurVariants[2] = {B0, B11};
uint8_t ADF4351_lowNoiseOrSpur_current = 0;
String ADF4351_lowNoiseOrSpur_verb[2] = {"LOW-NOISE-MODE", "LOW-SPUR-MODE"};

uint8_t ADF4351_outputPowerVariants[4] = {B0, B01, B10, B11};
uint8_t ADF4351_outputPower_current = 0;
String ADF4351_outputPower_verb[4] = {"-4", "-1", "2", "5"};

uint32_t ADF4351_registers[6]; //ADF4351 Registers, see datasheet

boolean ADF4351_isNeedSetNewConfig = false;

//========================================== INTERFACE ==========================================================
#define ENCODER_button 7
#define ENCODER_A 9
#define ENCODER_B 8
boolean ENCODER_A_state;
boolean ENCODER_B_state;
boolean ENCODER_A_state_prev = false;

#define BTN_step A3
#define BTN_lownoisespur A2
#define BTN_out_power A1
#define BTN_multiplier A0

#define LED_pin 6

uint32_t INTERFACE_action_prev_ms = 0L;

//OLED SDA A4, SCL A5
#include <OLED_I2C.h>
OLED  myOLED(SDA, SCL);
extern uint8_t SmallFont[]; //6*8
extern uint8_t MediumNumbers[]; //12*16
boolean OLED_blynk_state = false;

uint8_t INTERFACE_freq_multiplier_variants[3] = {1, 2, 4};
uint8_t INTERFACE_freq_multiplier_current = 0;

//================================== TIMEMACHINE =================================================================
uint32_t TIMEMACHINE_prev_5ms = 0L;
uint32_t TIMEMACHINE_prev_311ms = 0L;

void setup() {
  ADF4351_init();
  OLED_init();
  ENCODER_init();
  BUTTON_init();
  Serial.begin(9600);
}

void loop() {
  TIMEMACHINE_loop();  
}




