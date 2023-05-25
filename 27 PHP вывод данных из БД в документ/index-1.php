<?php
/**
SELECT `ORDER_NUM`, `ORDER_DATE`, `QTY`, `AMOUNT`,
COMPANY, NAME, CITY, DESCRIPTION, PRICE
FROM `orders`, customers, salesreps, offices, products
WHERE cust = cust_num
AND rep = empl_num
AND rep_office = office
AND mfr = mfr_id
AND product = product_id;
 */

