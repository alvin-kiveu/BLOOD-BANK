char inputdata;
int pin = 13;
int outputdata = 13;

void setup() {
  Serial.begin(9600);
  pinMode(pin, OUTPUT);
  Serial.println("START APPLICATION");
}


void loop() {
  if(Serial.available() > 0){
     inputdata = Serial.read();
     if(inputdata == '1'){
       Serial.println("BULB TURNED ON");
       //TURNING ON BULB
       digitalWrite(outputdata, HIGH);
     }else if (inputdata == '2'){
       Serial.println("BULB TURNED OFF");
        //TURNING ON BULB
       digitalWrite(outputdata, LOW);
     }
   }
}