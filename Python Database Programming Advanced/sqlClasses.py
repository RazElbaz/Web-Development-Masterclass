import pymysql

class Datab():
    def __init__(self, databaseName, servername, username, password):
        self.n = databaseName
        db = pymysql.connect(host="localhost", user="root", passwd="mine")
        cursor = db.cursor()
        self.cursor = cursor
        cursor.execute("CREATE DATABASE IF NOT EXISTS {};".format(self.n))
        cursor.execute("USE {};".format(self.n))

    def addTable(self, tableName, **columns):
        sql = "CREATE TABLE IF NOT EXISTS `" + tableName + "` ("
        for c, t in columns.items():
            sql += "`%s` %s, " % (c, t)
        sql = sql[:-2] + ");"
        self.cursor.execute(sql)

    def addElement(self, tableName, **values):
        sql = "INSERT INTO `" + tableName + "` ("
        columns = []
        value = []
        for k, v in values.items():
            columns.append(k)
            value.append(v)
        for i in columns:
            sql += "`%s`, " % i
        sql = sql[:-2] + ") VALUES ("
        placeholders = ["%s" for _ in range(len(columns))]
        sql += ", ".join(placeholders)
        sql += ");"
        self.cursor.execute(sql, tuple(value))

    def viewTable(self, tableName):
        self.cursor.execute("SELECT * from `%s`" % tableName)
        print(self.cursor.fetchall())

newdb = Datab("creative_online_school_dot_com", "localhost", "root", "mine")
newdb.addTable("newTable", Id="int NOT NULL AUTO_INCREMENT PRIMARY KEY", First="varchar(40)", Last="varchar(40)")
newdb.addElement("newTable", First="David", Last="Baker")
newdb.addElement("newTable", First="Raz", Last="Elbaz")
newdb.viewTable("newTable")
