import pymysql

class Datab():
    def __init__(self, databaseName, servernamme, username, password):

    def addTavle(self, tableName, **columns):
        sql="CREATE TABLE IF NOT EXISTS" + tableName +"( "
        for c,t in columns.items():
            sql+="%s %s, " % (c,t)
        sql=sql[:-2]+");"
        self.cursor.execute(sql)
    
    def addElement(self, tableName, **values):
        sql="INSERT INTO "+tableName+"("
        columns=[]
        value=[]
        for k,v in values.items():
            columns.append(k)
            value.append(v)
        for i in columns:
            sql+="%s, " % i
        sql=sql[:-2]+") VALUES ("
        for v in value:
            sql+="%s, " % v
        sql=sql[:-2]+");"
