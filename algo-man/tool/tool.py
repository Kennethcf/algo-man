import mysql.connector as sqlc
import base64
import re



mydb = sqlc.connect(
  host="localhost",
  user="admin",
  password="admin@123",
  database="rep"
)

st = ""
file = ""
replace =  [5]
def createcode(op):
	global st,file
	
	for i in range(op):


		sql =  "select * from upload where filename = '"+input("enter operation") +"'"
		mycursor = mydb.cursor()
		row = mycursor.execute(sql)

		myresult = mycursor.fetchall()		


		for j in range(1,myresult[0][5]+1): 
			if j == 1:	
				replace = input("replace variable"+str(j))
				print(replace)
				file = myresult[0][3]
				file  = file.decode("ascii")
				file = base64.b64decode(file)
				file = file.decode("ascii")
				file = file.replace("replace"+str(j),replace)
				st = st + file
			else :
				replace = input("replace variable"+str(j))
				st = st.replace("replace"+str(j),replace)
	writefile(st)
def writefile(st):
	files = open(input("filename")+".py","w")
		
	files.write(str(st))
	files.close()


if __name__ == "__main__":
	op = int(input("number of operation"))
	createcode(op)
