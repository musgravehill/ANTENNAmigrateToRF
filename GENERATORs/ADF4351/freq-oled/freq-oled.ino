
uint32_t ADF4351_frequency = 43392000L;

void setup() {
  Serial.begin(9600);
  float OLED_freq1 = 43392000L / 100000L; //433.000000
  float OLED_freq2 = ADF4351_frequency / 100000.0; //433.9200134277 

  Serial.println(OLED_freq1, DEC);
  Serial.println(OLED_freq2, DEC);
}

void loop() {
  // put your main code here, to run repeatedly:

}
