import pymysql

# Connect to the MySQL server
server = pymysql.connect(host="localhost", user="root", passwd="mine")
cursor = server.cursor()

# Create a database if it doesn't exist
sql = "CREATE DATABASE IF NOT EXISTS creative_online_school;"
cursor.execute(sql)

# Switch to the new database
sql = "USE creative_online_school;"
cursor.execute(sql)

# Create the 'owners' table
sql = '''CREATE TABLE IF NOT EXISTS owners(
    id INT NOT NULL AUTO_INCREMENT,
    name VARCHAR(30) NOT NULL,
    gender VARCHAR(7),
    phone VARCHAR(10),
    PRIMARY KEY(id)
);'''
cursor.execute(sql)

# Create the 'pets' table (I assume this is what you meant by 'owners')
sql = '''CREATE TABLE IF NOT EXISTS pets(
    pet_id INT NOT NULL AUTO_INCREMENT,
    owner_id INT,
    name VARCHAR(30) NOT NULL,
    gender VARCHAR(7),
    species VARCHAR(20),
    age INT,
    PRIMARY KEY(pet_id),
    FOREIGN KEY(owner_id) REFERENCES owners(id)
);'''
cursor.execute(sql)

# Show the tables in the database
sql = "SHOW TABLES;"
cursor.execute(sql)
tables = cursor.fetchall()

# Print the list of tables
for table in tables:
    print(table[0])

# Close the cursor and the database connection
cursor.close()
server.close()
