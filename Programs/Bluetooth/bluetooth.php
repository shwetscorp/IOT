<?php

echo '
int LED= '.$input_pins.';  
char input[10];
#include<string.h>
#include <LiquidCrystal.h>
LiquidCrystal lcd(12, 11, 5, 4, 3, 2);
void setup() 
{  
  Serial.begin(9600);  
  pinMode(LED, OUTPUT);  
  Serial.println(">> START<<"); 
  lcd.begin(16, 2);
  // Print a message to the LCD.
  lcd.print("hello, world!"); 
}  

int mstrcmp(char a[10], char b[10]) {
  int i;
  for(i=0;i<6;i++)
    if(a[i]!=b[i])
      return 0;
  return 1;
}
  
void loop() 
{  
  lcd.setCursor(0, 1);
  // print the number of seconds since reset:
  lcd.print(millis() / 1000);
  int i,j;
  if(Serial.available()>0)  
  { 
    i=0;
    while(Serial.available()>0) {
      input[i++]= (char)Serial.read();
      delay(50);
    }
    //input[i]=\'\0\';
    if(mstrcmp(input,"led on"))
    {  
      Serial.println("ON");  
      digitalWrite(LED, HIGH);  
      delay(2000);  
    }
    else
    {  
      Serial.println("OFF");  
      digitalWrite(LED, LOW);  
      delay(2000);  
    } 
    lcd.setCursor(1,4);
    lcd.print(input);
    while(j<i) 
      Serial.print(input[j++]);
     j=0;
    while(j<i) 
      Serial.print(input[j++]);
    /*if(input==\'1\')  
    {  
      Serial.println("ON");  
      digitalWrite(LED, HIGH);  
      delay(2000);  
    }  
    else if(input==\'0\')  
    {  
      Serial.println("OFF");  
      digitalWrite(LED, LOW);  
      delay(2000);  
    }  
    else  
    {  
      Serial.println("NO INPUT");  
      Serial.println(input);  
    }*/ 
  }  
    
}  ';
?>
