# AstraTech_UserData_Manger
This project is designed to manage user data using a MySQL database and provide an admin tool for data visualization and import. The main features of the project include  MySQL database, an Admin tool for viewing all data stored in the database, and Excel sheet data import functionality through the admin tool.


#Database Schema: 
The project defines a MySQL database schema with four essential fields: id, full_name, phone_number, and email. This schema provides the foundation for storing user information.

#Admin Tool: 
An intuitive admin tool interface enables administrators to view and manage user data stored in the database. This tool enhances data visibility and facilitates quick access to user information.

#Excel Data Import: 
The project introduces an advanced Excel data import feature through the admin tool. Users can upload Excel sheets containing user data with column names different from the database schema. The system intelligently maps Excel columns to the appropriate database fields, ensuring seamless data insertion.

#Flexible Mapping: 
The Excel data import process supports flexible column mapping. Users can define their own column names in the Excel sheet while specifying the corresponding database field for each column. This flexibility allows for efficient data migration without requiring modifications to existing Excel files.


##Example
Suppose you have the following Excel column names: telephone number, cell, and phone. By leveraging the powerful mapping functionality, you can effortlessly import this data into the phone_number field in the database, providing a consistent user experience.
