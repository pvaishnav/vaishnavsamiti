-- cPanel mysql backup
GRANT USAGE ON *.* TO 'vaishnav'@'localhost' IDENTIFIED BY PASSWORD '*BAFB5C83634408042173ADD4A1073ED273451642';
GRANT ALL PRIVILEGES ON `vaishnav\_samiti\_db`.* TO 'vaishnav'@'localhost';
GRANT ALL PRIVILEGES ON `vaishnav\_%`.* TO 'vaishnav'@'localhost';
GRANT USAGE ON *.* TO 'vaishnav_samuser'@'localhost' IDENTIFIED BY PASSWORD '*023BC4A77CE1FA6D28DD09D90E0BC88DA74B3390';
GRANT ALL PRIVILEGES ON `vaishnav\_samiti\_db`.* TO 'vaishnav_samuser'@'localhost';
