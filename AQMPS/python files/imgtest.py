# -*- coding: utf-8 -*-
"""
Created on Mon Apr  5 22:24:06 2021

@author: Bhavya
"""
#!C:\Users\Bhavya\AppData\Local\Programs\Python\Python37
import pymysql
import pandas as pd 
import matplotlib.pyplot as plt

#database connection
connection = pymysql.connect(host="localhost", port = 3307, user="root", password="", database="aqmps")
cursor = connection.cursor()

AllSQL = " Select password from client_complete_data;"
cursor.execute(AllSQL)
rows = cursor.fetchall()
for row in rows:
   #print(row)
   indus = row[0]
   #cursor.execute("Select username,Date,Time,CO,PM25 from " + indus + ";")
   #rows1 = cursor.fetchall()
   #for row1 in rows1:
      # print(row1)   
   df = pd.read_sql("Select username,Date,Time,CO,PM25 from " + indus + ";", connection)
   print(df)
   plt.plot(df['Date'],df['CO'])
   plt.plot(df['Date'],df['PM25'])
   plt.savefig(indus + '.jpg')
   plt.show()
   #plt.savefig(indus + '.jpg')
   df.dropna().empty
   
connection.close()
