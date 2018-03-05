
void ADF4351_init() {
  pinMode (ADF4351_ss_pin, OUTPUT);
  digitalWrite(ADF4351_ss_pin, LOW);
  SPI.setDataMode(SPI_MODE0);
  SPI.setBitOrder(MSBFIRST);
  SPI.begin();
  delay(900);
  ADF4351_setConfig();
}

void ADF4351_out_power_next() {
  ADF4351_outputPower_current += 1;
  if (ADF4351_outputPower_current > 3) {  //cycle, return to 0-pos
    ADF4351_outputPower_current = 0;
  }
  ADF4351_isNeedSetNewConfig = true;
}

void ADF4351_lowNoiseSpurMode_next() {
  ADF4351_lowNoiseOrSpur_current += 1;
  if (ADF4351_lowNoiseOrSpur_current > 1) {  //cycle, return to 0-pos
    ADF4351_lowNoiseOrSpur_current = 0;
  }
  ADF4351_isNeedSetNewConfig = true;
}

void ADF4351_step_next() {
  ADF4351_stepsVariantsNumCurrent += 1;
  if (ADF4351_stepsVariantsNumCurrent > 6) {  //cycle, return to 0-pos
    ADF4351_stepsVariantsNumCurrent = 0;
  }
  ADF4351_freqStepCurrent = ADF4351_stepsVariants[ADF4351_stepsVariantsNumCurrent]; //it is in ADF4351_prepareConfig()
  ADF4351_isNeedSetNewConfig = true;
}

void ADF4351_freq_inc() {
  ADF4351_frequency += ADF4351_freqStepCurrent;
  ADF4351_isNeedSetNewConfig = true;
}

void ADF4351_freq_dec() {
  ADF4351_frequency -= ADF4351_freqStepCurrent;
  ADF4351_isNeedSetNewConfig = true;
}


void ADF4351_setConfig() {
  ADF4351_isNeedSetNewConfig = false;
  ADF4351_freqStepCurrent = ADF4351_stepsVariants[ADF4351_stepsVariantsNumCurrent]; //it is in ADF4351_prepareConfig()
  ADF4351_prepareConfig();
  ADF4351_writeToRegister(5);
  delayMicroseconds(2500);
  ADF4351_writeToRegister(4);
  delayMicroseconds(2500);
  ADF4351_writeToRegister(3);
  delayMicroseconds(2500);
  ADF4351_writeToRegister(2);
  delayMicroseconds(2500);
  ADF4351_writeToRegister(1);
  delayMicroseconds(2500);
  ADF4351_writeToRegister(0);
  delayMicroseconds(2500);

  //////DBG
  Serial.println("\r\n SEND CONFIG \r\n");
  for (byte i = 0; i < 6; i++) {
    Serial.print("REG");
    Serial.print(i, DEC);
    Serial.print(" ");
    Serial.println(ADF4351_registers[i], HEX);
  }
  Serial.print("\r\n ADF4351_freqStepCurrent=");
  Serial.println(ADF4351_freqStepCurrent, DEC);
  
  ///////DBG END

}

void ADF4351_writeToRegister(int idx)
{ // make 4 byte from integer for SPI-Transfer
  byte buf[4];
  for (uint8_t i = 0; i < 4; i++)
    buf[i] = (byte)(ADF4351_registers[idx] >> (i * 8));
  ADF4351_writeData(buf[3], buf[2], buf[1], buf[0]);
}
int ADF4351_writeData(byte a1, byte a2, byte a3, byte a4) {
  // write over SPI to ADF4351
  digitalWrite(ADF4351_ss_pin, LOW);
  delayMicroseconds(10);
  SPI.transfer(a1);
  SPI.transfer(a2);
  SPI.transfer(a3);
  SPI.transfer(a4);
  ADF4351_ss_toggle();
}
int ADF4351_ss_toggle() {
  digitalWrite(ADF4351_ss_pin, HIGH);
  delayMicroseconds(5);
  digitalWrite(ADF4351_ss_pin, LOW);
}

void ADF4351_prepareConfig() {
  // PLL-Reg-R0         =  32bit
  // Registerselect        3bit
  // int F_Frac = 4;       // 12bit
  // int N_Int = 92;       // 16bit
  // reserved           // 1bit

  // PLL-Reg-R1         =  32bit
  // Registerselect        3bit
  //int M_Mod = 5;        // 12bit
  int P_Phase = 1;     // 12bit bei 2x12bit hintereinander pow()-bug !!
  uint8_t Prescal = 0;     // 1bit geht nicht ???
  uint8_t PhaseAdj = 0;    // 1bit geht auch nicht ???
  // reserved           // 3bit

  // PLL-Reg-R2         =  32bit
  // Registerselect        3bit
  uint8_t U1_CountRes = 0; // 1bit
  uint8_t U2_Cp3state = 0; // 1bit
  uint8_t U3_PwrDown = 0;  // 1bit
  uint8_t U4_PDpola = 1;    // 1bit
  uint8_t U5_LPD = 0;       // 1bit
  uint8_t U6_LPF = 1;       // 1bit 1=Integer, 0=Frac not spported yet
  uint8_t CP_ChgPump = 7;     // 4bit
  uint8_t D1_DoublBuf = 0; // 1bit
  //  int R_Counter = 1;   // 10bit
  //  int RD1_Rdiv2 = 0;    // 1bit
  //  int RD2refdoubl = 0; // 1bit
  uint8_t M_Muxout = 0;     // 3bit
  uint8_t LoNoisSpur = ADF4351_lowNoiseOrSpurVariants[ADF4351_lowNoiseOrSpur_current];      //0   2bit
  // reserved           // 1bit

  // PLL-Reg-R3         =  32bit
  // Registerselect        3bit
  int D_Clk_div = 150; // 12bit
  uint8_t C_Clk_mode = 0;   // 2bit
  //  reserved          // 1bit
  uint8_t F1_Csr = 0;       // 1bit
  //  reserved          // 2bit
  uint8_t F2_ChgChan = 0;   // 1bit
  uint8_t F3_ADB = 0;       // 1bit
  uint8_t F4_BandSel = 0;  // 1bit
  //  reserved          // 8bit

  // PLL-Reg-R4         =  32bit
  // Registerselect        3bit
  uint8_t D_out_PWR = ADF4351_outputPowerVariants[ADF4351_outputPower_current] ;    // 2bit
  uint8_t D_RF_ena = 1;     // 1bit
  uint8_t D_auxOutPwr = 0;  // 2bit
  uint8_t D_auxOutEna = 0;  // 1bit
  uint8_t D_auxOutSel = 0;  // 1bit
  uint8_t D_MTLD = 0;       // 1bit
  uint8_t D_VcoPwrDown = 0; // 1bit 1=VCO off

  //  int B_BandSelClk = 200; // 8bit

  uint8_t D_RfDivSel = 3;    // 3bit 3=70cm 4=2m
  uint8_t D_FeedBck = 1;     // 1bit
  // reserved           // 8bit

  // PLL-Reg-R5         =  32bit
  // Registerselect     // 3bit
  // reserved           // 16bit
  // reserved     11    // 2bit
  // reserved           // 1bit
  uint8_t D_LdPinMod = 1;    // 2bit muss 1 sein
  // reserved           // 8bit

  // Referenz Freg Calc
  //  long ADF4351_referenceFreq = 250000; // Refrenquarz = 25000000hz
  int R_Counter = 1;   // 10bit
  uint8_t RD1_Rdiv2 = 0;    // 1bit
  uint8_t RD2refdoubl = 0; // 1bit
  int B_BandSelClk = 200; // 8bit
  //  int F4_BandSel = 0;  // 1bit

  // int F4_BandSel = 10.0 * B_BandSelClk / PFDFreq;

  uint32_t RFout = ADF4351_frequency;   // VCO-Frequenz
  // calc bandselect und RF-div
  uint8_t outdiv = 0;

  if (RFout >= 220000000) {
    outdiv = 1;
    D_RfDivSel = B0;
  }
  if (RFout < 220000000) {
    outdiv = 2;
    D_RfDivSel = B001;
  }
  if (RFout < 110000000) {
    outdiv = 4;
    D_RfDivSel = B010;
  }
  if (RFout < 55000000) {
    outdiv = 8;
    D_RfDivSel = B011;
  }
  if (RFout < 27500000) {
    outdiv = 16;
    D_RfDivSel = B100;
  }
  if (RFout < 13800000) {
    outdiv = 32;
    D_RfDivSel = B101;
  }
  if (RFout < 6900000) {
    outdiv = 64;
    D_RfDivSel = B110;
  }

  float PFDFreq = ADF4351_referenceFreq * ((1.0 + RD2refdoubl) / (R_Counter * (1.0 + RD1_Rdiv2))); //Referenzfrequenz *10 (все частоту сокращена в 10раз почему-то)
  float N = ((RFout) * outdiv) / PFDFreq;
  uint16_t N_Int = N;
  uint16_t M_Mod = PFDFreq * (100000 / ADF4351_freqStepCurrent) / 100000;
  uint16_t F_Frac = round((N - N_Int) * M_Mod);

/*
  Serial.print("\r\n PFDFreq=");
  Serial.println(PFDFreq, DEC);

  Serial.print("\r\n N_Int=");
  Serial.println(N_Int, DEC);

  Serial.print("\r\n M_Mod=");
  Serial.println(M_Mod, DEC);

  Serial.print("\r\n F_Frac=");
  Serial.println(F_Frac, DEC);

  Serial.print("\r\n outdiv=");
  Serial.println(outdiv, DEC);

  Serial.print("\r\n D_RfDivSel=");
  Serial.println(D_RfDivSel, BIN);
  */




  ADF4351_registers[0] = (unsigned long)(0 + F_Frac * pow(2, 3) + N_Int * pow(2, 15));
  ADF4351_registers[1] = (unsigned long)(1 + M_Mod * pow(2, 3) + P_Phase * pow(2, 15) + Prescal * pow(2, 27) + PhaseAdj * pow(2, 28));
  //  ADF4351_registers[1] = (ADF4351_registers[1])+1; // Registerselect adjust ?? because unpossible 2x12bit in pow() funktion
  ADF4351_registers[2] = (unsigned long)(2 + U1_CountRes * pow(2, 3) + U2_Cp3state * pow(2, 4) + U3_PwrDown * pow(2, 5) + U4_PDpola * pow(2, 6) + U5_LPD * pow(2, 7) + U6_LPF * pow(2, 8) + CP_ChgPump * pow(2, 9) + D1_DoublBuf * pow(2, 13) + R_Counter * pow(2, 14) + RD1_Rdiv2 * pow(2, 24) + RD2refdoubl * pow(2, 25) + M_Muxout * pow(2, 26) + LoNoisSpur * pow(2, 29));
  ADF4351_registers[3] = (unsigned long)(3 + D_Clk_div * pow(2, 3) + C_Clk_mode * pow(2, 15) + 0 * pow(2, 17) + F1_Csr * pow(2, 18) + 0 * pow(2, 19) + F2_ChgChan * pow(2, 21) +  F3_ADB * pow(2, 22) + F4_BandSel * pow(2, 23) + 0 * pow(2, 24));
  ADF4351_registers[4] = (unsigned long)(4 + D_out_PWR * pow(2, 3) + D_RF_ena * pow(2, 5) + D_auxOutPwr * pow(2, 6) + D_auxOutEna * pow(2, 8) + D_auxOutSel * pow(2, 9) + D_MTLD * pow(2, 10) + D_VcoPwrDown * pow(2, 11) + B_BandSelClk * pow(2, 12) + D_RfDivSel * pow(2, 20) + D_FeedBck * pow(2, 23));
  ADF4351_registers[5] = (unsigned long)(5 + 0 * pow(2, 3) + 3 * pow(2, 19) + 0 * pow(2, 21) + D_LdPinMod * pow(2, 22));
}
//to do instead of writing 0x08000000 you can use other two possibilities: (1ul << 27) or (uint32_t) (1 << 27).


// as PLL-Register Referenz
// ADF4351_registers[0] = (0x002E0020); // 145.0 Mhz, 12.5khz raster
// ADF4351_registers[1] = (0x08008029);
// ADF4351_registers[2] = (0x00004E42);
// ADF4351_registers[3] = (0x000004B3);
// ADF4351_registers[4] = (0x00BC8024);
// ADF4351_registers[5] = (0x00580005);

/*
  Low Noise and Low Spur Modes
  The noise mode on the ADF4351 is controlled by setting
  Bits[DB30:DB29] in Register 2 (see Figure 26). The noise mode
  allows the user to optimize a design either for improved spurious
  performance or for improved phase noise performance.
  When the low spur mode is selected, dither is enabled. Dither
  randomizes the fractional quantization noise so that it resembles
  white noise rather than spurious noise. As a result, the part is
  optimized for improved spurious performance. Low spur mode
  is normally used for fast-locking applications when the PLL
  closed-loop bandwidth is wide. Wide loop bandwidth is a loop
  bandwidth greater than 1/10 of the RFOUT channel step resolution
  (fRES). A wide loop filter does not attenuate the spurs to the
  same level as a narrow loop bandwidth.
  For best noise performance, use the low noise mode option.
  When the low noise mode is selected, dither is disabled. This
  mode ensures that the charge pump operates in an optimum
  region for noise performance. Low noise mode is extremely
  useful when a narrow loop filter bandwidth is available. The
  synthesizer ensures extremely low noise, and the filter attenuates
  the spurs. Figure 10 through Figure 12 show the trade-offs in a
  typical W-CDMA setup for different noise and spur settings.
*/


