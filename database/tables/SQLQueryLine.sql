CREATE TABLE table_line(
    line_id INT(11) NOT NULL ,
    line_warrantyperiod INT NULL,
    line_warrantyavailable VARCHAR (50) NULL, 
    line_imei VARCHAR (50) NULL,
    line_cost INT NULL,
    line_warrantydate DATETIME,


    customer_id INT (11) NULL,
    sale_id INT (11) NULL,
    item_id INT (11) NULL,
	
    PRIMARY KEY(line_id),
    FOREIGN KEY(customer_id) REFERENCES table_customer(customer_id),
    FOREIGN KEY(sale_id) REFERENCES table_sale(sale_id),
    FOREIGN KEY(item_id) REFERENCES table_item(item_id)

);