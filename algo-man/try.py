import mysql.connector as sqlc
import base64
import re



mydb = sqlc.connect(
  host="localhost",
  user="admin",
  password="admin@123",
  database="rep"
)


sql =  "select * from upload where filename = '"+input("enter operation") +"'"
mycursor = mydb.cursor()
row = mycursor.execute(sql)
myresult = mycursor.fetchall()
print(len(myresult))		
