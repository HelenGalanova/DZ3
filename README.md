# DZ3 
Задание #1
1. Дан XML файл. Сохраните его под именем data.xml:
<? xml version = " 1.0 " ?>
< PurchaseOrder PurchaseOrderNumber = " 99503 " OrderDate = " 1999-10-20 " >
< Address Type = " Shipping " >
< Name > Ellen Adams </ Name >
< Street > 123 Maple Street </ Street >
< City > Mill Valley </ City >
< State > CA </ State >
< Zip > 10999 </ Zip >
< Country > USA </ Country >
</ Address >
< Address Type = " Billing " >
< Name > Tai Yee </ Name >
< Street > 8 Oak Avenue </ Street >
< City > Old Town </ City >
< State > PA </ State >
< Zip > 95819 </ Zip >
< Country > USA </ Country >
</ Address >
< DeliveryNotes > Please leave packages in shed by
driveway. </ DeliveryNotes >
< Items >
< Item PartNumber = " 872-AA " >
< ProductName > Lawnmower </ ProductName >
< Quantity > 1 </ Quantity >
< USPrice > 148.95 </ USPrice >
< Comment > Confirm this is electric </ Comment >
</ Item >
< Item PartNumber = " 926-AA " >
< ProductName > Baby Monitor </ ProductName >
< Quantity > 2 </ Quantity >
< USPrice > 39.98 </ USPrice >
< ShipDate > 1999-05-21 </ ShipDate >
</ Item >
</ Items >
</ PurchaseOrder >
2. Написать скрипт, который выведет всю информацию из этого файла в удобно
читаемом виде. Представьте, что результат вашего скрипта будет распечатан и
выдан курьеру для доставки, разберется ли курьер в этой информации?
Задача #2
1. Создайте массив, в котором имеется как минимум 1 уровень вложенности.
Преобразуйте его в JSON. Сохраните как output.json
2. Откройте файл output.json. Случайным образом решите изменять данные или
нет. Сохраните как output2.json
3. Откройте оба файла. Найдите разницу и выведите информацию об
отличающихся элементах