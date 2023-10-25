import pymysql

def load_owners(cursor):
    cursor.execute("USE creative_online_school;")  # Select the database
    owners_data = open("owners.txt")
    for rowline in owners_data:
        row = rowline.strip().split(",")
        sql = "INSERT INTO owners(name, gender, phone) VALUES('{}','{}','{}');".format(row[0], row[1], row[2])
        cursor.execute(sql)

    cursor.execute("SELECT * from owners;")
    print("Owners:")
    print(cursor.fetchall())

def load_pets(cursor):
    cursor.execute("USE creative_online_school;")  # Select the database
    pets_data = open("pets.txt")
    for rowline in pets_data:
        row = rowline.strip().split(",")
        sql = "INSERT INTO pets(owner_id, name, gender, species, age) VALUES((SELECT id FROM owners WHERE name='{}'),'{}','{}','{}','{}');".format(*row)
        cursor.execute(sql)

    cursor.execute("SELECT * from pets;")
    print("Pets:")
    print(cursor.fetchall())

if __name__ == "__main__":
    db = pymysql.connect(host="localhost", user="root", passwd="mine")
    cursor = db.cursor()
    load_owners(cursor)
    load_pets(cursor)
    db.commit()
    db.close()
