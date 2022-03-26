CREATE TABLE table_sale(
    sale_id INT(11) NOT NULL,
    sale_date DATE NULL,
    sale_time TIME NULL,
	
    sale_totalcost VARCHAR (50) NULL,

    customer_id INT (11) NULL,
    employee_id INT (11) NULL,
	
    PRIMARY KEY(sale_id),
   
    FOREIGN KEY(customer_id) REFERENCES table_customer(customer_id),
    FOREIGN KEY(employee_id) REFERENCES table_employee(employee_id)

);