void setup() {
  // put your setup code here, to run once:
pinMode(3,INPUT);
Serial.begin(9600);
Serial.print("Start");
}

void loop() {
  // put your main code here, to run repeatedly:
int a=digitalRead(3);
Serial.println(a);
delay(500);
}
