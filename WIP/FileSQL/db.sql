
 CREATE TABLE USERs ( 
 id int NOT NULL PRIMARY KEY AUTO_INCREMENT,
 FullNames varchar(40),
 email varchar(30),
 PhoneNumbers varchar(20),
 password MEDIUMTEXT,
 ParticipateDates datetime,
 Coins double,
 created_at TIMESTAMP(6),
 updated_at TIMESTAMP(6),
 remember_token MEDIUMTEXT,
 UserTypes int )

 CREATE TABLE COINTRADINGs
(
 id int NOT NULL PRIMARY KEY AUTO_INCREMENT,
 UserIDs int,
 Valuess double,
 TransactionTimes datetime,
 created_at TIMESTAMP(6),
 updated_at TIMESTAMP(6),
 FOREIGN KEY (UserIDs) REFERENCES USERs(id)
 )

CREATE TABLE POSTINGs
(
 id int NOT NULL PRIMARY KEY AUTO_INCREMENT,
 UserIDs int,
 Categorys varchar (100),
 Type1s varchar(50),
 Type2s varchar(50),
 Addresss varchar(100),
 URLImage1s varchar(100),
 URLImage2s varchar(100),
 URLImage3s varchar(100),
 Costs double,
 Conditions varchar(50),
 Titles varchar(100),
 Details varchar(225),
 Transportations varchar(30),
 PostTimes datetime,
 created_at TIMESTAMP(6),
 updated_at TIMESTAMP(6),
 Statuss int,
 FOREIGN KEY (UserIDs) REFERENCES USERs(id)
 )

 CREATE TABLE SERVICESs
(
 id int NOT NULL PRIMARY KEY AUTO_INCREMENT,
 Typess varchar(50),
 ServiceCosts double,
 created_at TIMESTAMP(6),
 updated_at TIMESTAMP(6)
 )


CREATE TABLE SERVICETRADINGs
(
 id int NOT NULL PRIMARY KEY AUTO_INCREMENT,
 ServiceIDs int not null,
 PostingIDs int not null,
 TransactionTimes datetime,
 ExecutionTimes datetime,
 created_at TIMESTAMP(6),
 updated_at TIMESTAMP(6),
FOREIGN KEY (ServiceIDs) REFERENCES SERVICESs (id),
FOREIGN KEY (PostingIDs) REFERENCES POSTINGs(id)
 )



 
  INSERT INTO USERs (FullNames, email, PhoneNumbers, password, ParticipateDates, Coins, UserTypes)
 VALUES(N'Admin', 'vnhatqn@gmail.com', '035623173', '$2y$10$Z9Gt7b2WKlt9njCJuh1h7O/yASVMoTQGz755bC1mQ5VPciFRAKFpC', '2019/01/06', 0, '1');/* mk: demo */
 INSERT INTO USERs (FullNames, email, PhoneNumbers, password, ParticipateDates, Coins, UserTypes)
 VALUES(N'Ngọc Thùy', 'ngocthuy@gmail.com', '035623174', '$2y$10$TE/AfdidO3QPK.E0fvw5S.3y9MzpFUVFxgYxWOxKWPdrO700AW6da', '2019/01/06', 100000, '2');
 INSERT INTO USERs (FullNames, email, PhoneNumbers, password, ParticipateDates, Coins, UserTypes)
 VALUES(N'Xuân Phú', 'xuanphu@gmail.com', '035623175', '$2y$10$ScMk6x8BmcRYVnaz6l1p/u3SpC6jhyN/AHMBLsgMSjs7b0LUjxEYa', '2019/01/06', 200000, '2');
 INSERT INTO USERs (FullNames, email, PhoneNumbers, password, ParticipateDates, Coins, UserTypes)
 VALUES(N'Quang Nhật', 'quangnhat@gmail.com', '035623176', '$2y$10$foaKwRhQR.7ZCbkMF.rP5uud0CbclBJu7qiIhFfkSGom0/bdg.07G', '2019/01/06', 300000, '2');


 INSERT INTO COINTRADINGs(UserIDs,Valuess,TransactionTimes)
 VALUES(2,50000,'2019/01/05');
 INSERT INTO COINTRADINGs(UserIDs,Valuess,TransactionTimes)
 VALUES(2,50000,'2019/01/06');
 INSERT INTO COINTRADINGs(UserIDs,Valuess,TransactionTimes)
 VALUES(3,100000,'2019/01/05');
 INSERT INTO COINTRADINGs(UserIDs,Valuess,TransactionTimes)
 VALUES(3,50000,'2019/01/06');
 INSERT INTO COINTRADINGs(UserIDs,Valuess,TransactionTimes)
 VALUES(4,150000,'2019/01/06');
 INSERT INTO COINTRADINGs(UserIDs,Valuess,TransactionTimes)
 VALUES(4,70000,'2019/01/04');

 INSERT INTO POSTINGs(UserIDs, Categorys, Type1s, Type2s, Addresss, URLImage1s, URLImage2s, URLImage3s, Costs, Conditions, Titles, Details, Transportations, PostTimes ,Statuss)
 VALUES(2, N'Giày dép', N'Cần bán', N'Cá nhân',N'Linh Trung Thủ Đức', 'img/giayluoiden-nam1.jpg', 'img/giayluoiden-nam2.jpg', 'img/giayluoiden-nam3.jpg', 99000, N'Mới', N'Giày nam đen', N'Giày nam đen, chất liệu cao cấp, bán tất cả các size.', N'Giao hàng bưu điện', '2019/01/01 09:30:30', '1');
 INSERT INTO POSTINGs(UserIDs, Categorys, Type1s, Type2s, Addresss, URLImage1s, URLImage2s, URLImage3s, Costs, Conditions, Titles, Details, Transportations, PostTimes ,Statuss)
 VALUES(2, N'Áo', N'Cần bán', N'Bán chuyên',N'Linh Trung Thủ Đức', 'img/aothun_mickey1.jpg', 'img/aothun_mickey2.jpg', 'img/aothun_mickey3.jpg', 100000, N'Mới', N'Áo thun Mickey', N'Áo thun cổ trơn mickey, chất liệu cao cấp, bán tất cả các size.', N'Giao hàng bưu điện', '2019/01/02 09:30:30', '3');
 INSERT INTO POSTINGs(UserIDs, Categorys, Type1s, Type2s, Addresss, URLImage1s, URLImage2s, URLImage3s, Costs, Conditions, Titles, Details, Transportations, PostTimes ,Statuss)
 VALUES(2, N'Quần', N'Cần bán', N'Cá nhân',N'Linh Trung Thủ Đức', 'img/quanjean_den_nam1.jpg', 'img/quanjean_den_nam2.jpg', 'img/quanjean_den_nam3.jpg', 89000, N'Đã sử dụng', N'Quần jean nam đen', N'Quần jean nam đen, chất liệu cao cấp, bán tất cả các size.', N'Giao hàng bưu điện', '2019/01/03 09:30:30', '2');
 INSERT INTO POSTINGs(UserIDs, Categorys, Type1s, Type2s, Addresss, URLImage1s, URLImage2s, URLImage3s, Costs, Conditions, Titles, Details, Transportations, PostTimes ,Statuss)
 VALUES(2, N'Mũ', N'Cần bán', N'Cá nhân',N'Linh Trung Thủ Đức', 'img/muluoitrai-fila1.jpg','img/muluoitrai-fila2.jpg','img/muluoitrai-fila3.jpg', 79000, N'Mới', N'Mũ lưỡi trai fila', N'Mũ lưỡi trai fila, chất liệu cao cấp, thời trang.', N'Gặp mặt giao hàng', '2019/01/04 09:20:30', '2');
 INSERT INTO POSTINGs(UserIDs, Categorys, Type1s, Type2s, Addresss, URLImage1s, URLImage2s, URLImage3s, Costs, Conditions, Titles, Details, Transportations, PostTimes ,Statuss)
 VALUES(3, N'Áo', N'Cần bán', N'Cá nhân',N'Linh Trung Thủ Đức', 'img/aothun_xanhinhinh1.jpg', 'img/aothun_xanhinhinh2.jpg','img/aothun_xanhinhinh3.jpg', 69000, N'Đã sử dụng', N'Áo thun xanh in hình', N'Áo thun xanh cổ trơn in hình, chất liệu cao cấp, bán tất cả các size cho cả nam và nữ.', N'Giao hàng bưu điện', '2019/01/04 09:30:30', '2');
 INSERT INTO POSTINGs(UserIDs, Categorys, Type1s, Type2s, Addresss, URLImage1s, URLImage2s, URLImage3s, Costs, Conditions, Titles, Details, Transportations, PostTimes ,Statuss)
 VALUES(3, N'Áo', N'Cần bán', N'Cá nhân',N'Linh Trung Thủ Đức','img/aothun_ngoisao1.jpg','img/aothun_ngoisao2.jpg','img/aothun_ngoisao1.jpg', 59000, N'Mới', N'Áo thun ngôi sao', N'Áo thun trắng thể thao, thiết kế thoáng mát, chất liệu bền, phù hợp với người chơi thể thao, bán tất cả các size cho cả nam và nữ.', N'Giao hàng bưu điện', '2019/01/05 09:30:30', '2');
 INSERT INTO POSTINGs(UserIDs, Categorys, Type1s, Type2s, Addresss, URLImage1s, URLImage2s, URLImage3s, Costs, Conditions, Titles, Details, Transportations, PostTimes ,Statuss)
 VALUES(4, N'Quần', N'Cần bán', N'Bán chuyên',N'Linh Trung Thủ Đức', 'img/quanjean_xanh_nu.jpg', null, null, 49000, N'Đã sử dụng', N'Quần jean nữ xanh', N'Quần jean nữ xanh, thời trang, cá tính', N'Gặp mặt giao hàng', '2019/01/05 09:20:30', '2');
 INSERT INTO POSTINGs(UserIDs, Categorys, Type1s, Type2s, Addresss, URLImage1s, URLImage2s, URLImage3s, Costs, Conditions, Titles, Details, Transportations, PostTimes ,Statuss)
 VALUES(4, N'Đầm xinh', N'Cần bán', N'Cá nhân',N'Linh Trung Thủ Đức', 'img/dam_den_caocap.jpg', null, null, 999000, N'Mới', N'Đầm đen cao cấp', N'Đầm đen cao cấp, vải rem, phong cách, hàng nhập khẩu.', N'Giao hàng bưu điện', '2019/01/06 09:30:30', '2');
 INSERT INTO POSTINGs(UserIDs, Categorys, Type1s, Type2s, Addresss, URLImage1s, URLImage2s, URLImage3s, Costs, Conditions, Titles, Details, Transportations, PostTimes ,Statuss)
 VALUES(1, N'Giày dép', N'Cần bán', N'Cá nhân',N'Linh Trung Thủ Đức', 'img/giay1.jpg', 'img/giay2.jpg', 'img/giay3.jpg', 69000, N'Mới', N'Giày dép', N'Giày dép, chất lượng cao cấp, bán đủ các size.', N'Giao hàng buu điện', '2019/01/02 09:30:30', '1');
 INSERT INTO POSTINGs(UserIDs, Categorys, Type1s, Type2s, Addresss, URLImage1s, URLImage2s, URLImage3s, Costs, Conditions, Titles, Details, Transportations, PostTimes ,Statuss)
 VALUES(2, N'Áo', N'Cần bán', N'Bán chuyên',N'Linh Trung Thủ Đức', 'img/aothethao1.jpg', 'img/aothethethao2.jpg', 'img/aothethethao3.jpg', 100000, N'Mới', N'Áo thể thao', N'Áo thể thao, chất liệu cao cấp, bán đủ các size.', N'Giao hàng bưu điện', '2019/01/01 09:30:30', '2');
 INSERT INTO POSTINGs(UserIDs, Categorys, Type1s, Type2s, Addresss, URLImage1s, URLImage2s, URLImage3s, Costs, Conditions, Titles, Details, Transportations, PostTimes ,Statuss)
 VALUES(2, N'Quần', N'Cần bán', N'Cá nhân',N'Linh Trung Thủ Đức', 'img/quanbaggy1.jpg', 'img/quanbaggy2.jpg', 'img/quanbaggy3.jpg', 19000, N'Ðã sử dụng', N'Quần baggy', N'Quần baggy, chất liệu cao cấp, bán đủ các size.', N'Giao hàng bưu điện', '2019/01/03 07:30:30', '2');
 INSERT INTO POSTINGs(UserIDs, Categorys, Type1s, Type2s, Addresss, URLImage1s, URLImage2s, URLImage3s, Costs, Conditions, Titles, Details, Transportations, PostTimes ,Statuss)
 VALUES(2, N'Mũ', N'Cần bán', N'Cá nhân',N'Linh Trung Thủ Đức', 'img/mudim1.jpg','img/mudim2.jpg','img/mudim3.jpg', 70000, N'Mới', N'Mũ dìm', N'Mũ dìm, chất liệu cao cấp, thời trang', N'Gặp mặt giao hàng', '2019/01/04 09:20:30', '2');
 INSERT INTO POSTINGs(UserIDs, Categorys, Type1s, Type2s, Addresss, URLImage1s, URLImage2s, URLImage3s, Costs, Conditions, Titles, Details, Transportations, PostTimes ,Statuss)
 VALUES(3, N'Áo', N'Cần bán', N'Cá nhân',N'Linh Trung Thủ Đức', 'img/aothoitrang1.jpg', 'img/aothoitrang2.jpg','img/aothoitrang3.jpg', 69000, N'Ðã sử dụng', N'Áo thời trang', N'Áo thời trang, chất lượng cao cấp, bán đủ các size cho nữ.', N'Giao hàng bưu điện', '2019/01/03 09:30:30', '2');
 




 INSERT INTO SERVICESs(Typess ,ServiceCosts)
 VALUES(N'Tin ưu tiên',10000);
 INSERT INTO SERVICESs(Typess ,ServiceCosts)
 VALUES(N'Nhãn nổi bật',7000);
  INSERT INTO SERVICESs(Typess ,ServiceCosts)
 VALUES(N'Tin đặc biệt',7000);
  INSERT INTO SERVICESs(Typess ,ServiceCosts)
 VALUES(N'Đẩy tin',5000);

 INSERT INTO SERVICETRADINGs(ServiceIDs,PostingIDs,TransactionTimes , ExecutionTimes )
 VALUES(1,3,'2019/01/03 09:30:30','2019/01/04 09:30:30');
 INSERT INTO SERVICETRADINGs(ServiceIDs,PostingIDs,TransactionTimes , ExecutionTimes )
 VALUES(2,3,'2019/01/05 09:20:30','2019/01/05 09:20:30');
 INSERT INTO SERVICETRADINGs(ServiceIDs,PostingIDs,TransactionTimes , ExecutionTimes )
 VALUES(3,3,'2019/01/04 09:30:30','2019/01/05 09:30:30');
 INSERT INTO SERVICETRADINGs(ServiceIDs,PostingIDs,TransactionTimes , ExecutionTimes )
 VALUES(4,4,'2019/01/05 09:20:30','2019/01/06 09:20:30');
 INSERT INTO SERVICETRADINGs(ServiceIDs,PostingIDs,TransactionTimes , ExecutionTimes )
 VALUES(3,5,'2019/01/05 09:30:30','2019/01/06 09:30:30');
 INSERT INTO SERVICETRADINGs(ServiceIDs,PostingIDs,TransactionTimes , ExecutionTimes )
 VALUES(1,5,'2019/01/05 09:30:30','2019/01/06 09:30:30');
  INSERT INTO SERVICETRADINGs(ServiceIDs,PostingIDs,TransactionTimes , ExecutionTimes )
 VALUES(1,7,'2019/01/01 03:00:30','2019/01/01 03:30:30');
 INSERT INTO SERVICETRADINGs(ServiceIDs,PostingIDs,TransactionTimes , ExecutionTimes )
 VALUES(2,7,'2019/01/03 07:00:30','2019/01/03 07:40:30');
 INSERT INTO SERVICETRADINGs(ServiceIDs,PostingIDs,TransactionTimes , ExecutionTimes )
 VALUES(3,11,'2019/01/02 06:30:30','2019/01/05 07:30:30');
 INSERT INTO SERVICETRADINGs(ServiceIDs,PostingIDs,TransactionTimes , ExecutionTimes )
 VALUES(2,8,'2019/01/01 07:20:30','2019/01/03 09:20:30');
 INSERT INTO SERVICETRADINGs(ServiceIDs,PostingIDs,TransactionTimes , ExecutionTimes )
 VALUES(1,10,'2019/01/05 04:30:30','2019/01/06 07:30:30');
