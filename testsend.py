import paho.mqtt.publish as publish
from Methoden import mqtt_s
import sys

Essen=str(sys.argv[1]+"_Essen")
mqtt_s.send(Essen)
print(Essen)
'''
mqtt_s.send("1_Essen")
mqtt_s.send("2_Essen")
mqtt_s.send("3_Essen")
mqtt_s.send("4_Essen")
mqtt_s.send("5_Essen")
mqtt_s.send("6_Essen")
mqtt_s.send("7_Essen")
mqtt_s.send("8_Essen")
mqtt_s.send("9_Essen")
mqtt_s.send("10_Essen")
mqtt_s.send("11_Essen")
mqtt_s.send("12_Essen")
mqtt_s.send("13_Essen")
mqtt_s.send("14_Essen")
mqtt_s.send("15_Essen")
mqtt_s.send("16_Essen")
mqtt_s.send("17_Essen")

mqtt_s.send("18_Essen")
mqtt_s.send("19_Essen")
mqtt_s.send("20_Essen")
mqtt_s.send("21_Essen")
mqtt_s.send("22_Essen")
mqtt_s.send("23_Essen")
mqtt_s.send("24_Essen")
'''
