int tempPin = 0;
float tempC;
int reading;

void setup()
{
analogReference(INTERNAL) // change aRef to 1.1V,use the command "analogReference(INTERNAL)
Serial.begin(9600);
}

void loop()
{
reading = analogRead(tempPin);
tempC = reading / 9.31;
Serial.println(tempC);
delay(1000);
}


