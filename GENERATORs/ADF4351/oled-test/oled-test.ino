
#include <OLED_I2C.h>

OLED  myOLED(SDA, SCL, 8);

extern uint8_t SmallFont[];

void setup()
{
  myOLED.begin();
  myOLED.setFont(SmallFont);
}

void loop()
{
  myOLED.clrScr();
  myOLED.print("Upper case:", LEFT, 0);
  myOLED.print("ABCDEFGHIJKLM", CENTER, 16);
  myOLED.print("NOPQRSTUVWXYZ", CENTER, 24);
  myOLED.update();
  delay (5000);
  
  myOLED.clrScr();
  myOLED.print("Lower case:", LEFT, 0);
  myOLED.print("abcdefghijklm", CENTER, 16);
  myOLED.print("nopqrstuvwxyz", CENTER, 24);
  myOLED.update();
  delay (5000);
  
  myOLED.clrScr();
  myOLED.print("Numbers:", LEFT, 0);
  myOLED.print("0123456789", CENTER, 16);
  myOLED.update();
  delay (5000);
  
  myOLED.clrScr();
  myOLED.print("Special:", LEFT, 0);
  myOLED.print("!\"#$%&'()*+,-.", CENTER, 16);
  myOLED.print("/:;<=>?@[\\]^_`", CENTER, 24);
  myOLED.print("{|}~", CENTER, 32);
  myOLED.update();
  delay (5000);
}
