CREATE TABLE table_item(
    item_id INT (11) NOT NULL,
    item_make VARCHAR (50) NULL,
    item_model VARCHAR (50) NULL,
    item_unitcost int NULL,
    item_color VARCHAR(50) NULL,
    item_warrantyperiod INT NULL,
    supplier_id INT (11) NOT NULL,
    item_nostock INT NULL,

    PRIMARY KEY(item_id),
    FOREIGN KEY(supplier_id) REFERENCES table_supplier(supplier_id)
);