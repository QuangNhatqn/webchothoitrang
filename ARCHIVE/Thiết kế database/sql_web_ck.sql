CREATE DATABASE webchothoitrang
GO
USE webchothoitrang
GO


CREATE TABLE USERs
(
 UserIDs int IDENTITY(1,1) not null,
 FullNames nvarchar(40),
 Emails varchar(30),
 PhoneNumbers varchar(20),
 Passwords varchar(40),
 ParticipateDates smalldatetime,
 Coins money, 
 UserTypes int
 )
 ALTER TABLE USERs ADD
 CONSTRAINT USERs_UserIDs_PK PRIMARY KEY(UserIDs)

 --INSERT INTO USERs (FullNames, Emails, PhoneNumbers, Passwords, ParticipateDates, Coins, UserTypes)
 --VALUES(N'Admin', 'vnhatqn@gmail.com', '035623173', 'demo', '06/01/2019', 0, '1')

 CREATE TABLE COINTRADINGs
(
 CTIDs int IDENTITY(1,1) not null,
 UserIDs int,
 Valuess money,
 TransactionTimes smalldatetime
 )
 ALTER TABLE COINTRADINGs ADD
 CONSTRAINT COINTRADINGs_CTIDs_PK PRIMARY KEY(CTIDs),
 CONSTRAINT COINTRADINGs_UserIDs_FK FOREIGN KEY(UserIDs) REFERENCES USERs(UserIDs)

 -- INSERT INTO COINTRADINGs(UserIDs,Valuess,TransactionTimes)
 --VALUES(2,5000,'05/01/2019')

 CREATE TABLE POSTINGs
(
 PostingIDs int IDENTITY(1,1) not null,
 UserIDs int,
 Categorys nvarchar (100),
 Type1s nvarchar(50),
 Type2s nvarchar(50),
 Addresss nvarchar(100),
 URLImage1s varchar(100),
 URLImage2s varchar(100),
 URLImage3s varchar(100),
 Costs money,
 Conditions nvarchar(50),
 Titles nvarchar(100),
 Details nvarchar(max),
 Transportations nvarchar(30),
 PostTimes smalldatetime,
 Statuss int
 )
 ALTER TABLE POSTINGs ADD
 CONSTRAINT POSTINGs_PostingIDs_PK PRIMARY KEY(PostingIDs),
 CONSTRAINT POSTINGs_UserIDs_FK FOREIGN KEY(UserIDs) REFERENCES USERs(UserIDs)

 -- INSERT INTO POSTINGs(UserIDs, Categorys, Type1s, Type2s, Addresss, URLImage1s, URLImage2s, URLImage3s, Costs, Conditions, Titles, Details, Transportations, PostTimes ,Statuss)
 --VALUES(2, N'Giày dép', N'Cần mua', N'Cá nhân',N'Linh Trung Thủ Đức', null, null, null, 99000, N'Mới', N'Giày nam đen', N'Giày nam đen, chất liệu cao cấp, bán tất cả các size.', N'Giao hàng bưu điện', '03/01/2019', '2')

  CREATE TABLE SERVICESs
(
 ServiceIDs int IDENTITY(1,1) not null,
 Typess nvarchar(50),
 ServiceCosts money
 )
 ALTER TABLE SERVICESs ADD
 CONSTRAINT SERVICESs_ServiceIDs_PK PRIMARY KEY(ServiceIDs)

 -- INSERT INTO SERVICESs(Typess ,ServiceCosts)
 --VALUES(N'Tin ưu tiên',2000)

  CREATE TABLE SERVICETRADINGs
(
 ServiceIDs int not null,
 PostingIDs int not null,
 TransactionTimes smalldatetime,
 ExecutionTimes smalldatetime

 )
 ALTER TABLE SERVICETRADINGs ADD
 CONSTRAINT SERVICETRADINGs_ServiceIDs_PostingIDs_PK PRIMARY KEY(ServiceIDs,PostingIDs),
 CONSTRAINT SERVICETRADINGs_ServiceIDs_FK FOREIGN KEY(ServiceIDs) REFERENCES SERVICESs (ServiceIDs),
 CONSTRAINT SERVICETRADINGs_PostingIDs_FK FOREIGN KEY(PostingIDs) REFERENCES POSTINGs(PostingIDs)

 SET DATEFORMAT DMY
 INSERT INTO USERs (FullNames, Emails, PhoneNumbers, Passwords, ParticipateDates, Coins, UserTypes)
 VALUES(N'Admin', 'vnhatqn@gmail.com', '035623173', 'demo', '06/01/2019', 0, '1')
 INSERT INTO USERs (FullNames, Emails, PhoneNumbers, Passwords, ParticipateDates, Coins, UserTypes)
 VALUES(N'Ngọc Thùy', 'ngocthuy@gmail.com', '035623174', 'thuy', '06/01/2019', 100000, '2')
 INSERT INTO USERs (FullNames, Emails, PhoneNumbers, Passwords, ParticipateDates, Coins, UserTypes)
 VALUES(N'Xuân Phú', 'xuanphu@gmail.com', '035623175', 'phu', '06/01/2019', 200000, '2')
 INSERT INTO USERs (FullNames, Emails, PhoneNumbers, Passwords, ParticipateDates, Coins, UserTypes)
 VALUES(N'Quang Nhật', 'quangnhat@gmail.com', '035623176', 'nhat', '06/01/2019', 300000, '2')


 --INSERT INTO USERs (UserNames,PhoneNumbers,Passwords,ParticipateDates,Coins,UserTypes)
 --VALUES(N'Admin','035623173','demo','06/01/2019',0,'1')
 --INSERT INTO USERs (UserNames,PhoneNumbers,Passwords,ParticipateDates,Coins,UserTypes)
 --VALUES(N'Nguyễn Thị Ngọc Thùy','035623174','thuy','05/01/2019',10000,'2')
 --INSERT INTO USERs (UserNames,PhoneNumbers,Passwords,ParticipateDates,Coins,UserTypes)
 --VALUES(N'Trần Thị Xuân Phú','035623175','phu','04/01/2019',20000,'2')
 --INSERT INTO USERs (UserNames,PhoneNumbers,Passwords,ParticipateDates,Coins,UserTypes)
 --VALUES(N'Võ Quang Nhật','035623176','nhat','04/01/2019',30000,'2')

 INSERT INTO COINTRADINGs(UserIDs,Valuess,TransactionTimes)
 VALUES(2,50000,'05/01/2019')
 INSERT INTO COINTRADINGs(UserIDs,Valuess,TransactionTimes)
 VALUES(2,50000,'06/01/2019')
 INSERT INTO COINTRADINGs(UserIDs,Valuess,TransactionTimes)
 VALUES(3,100000,'05/01/2019')
 INSERT INTO COINTRADINGs(UserIDs,Valuess,TransactionTimes)
 VALUES(3,50000,'06/01/2019')
 INSERT INTO COINTRADINGs(UserIDs,Valuess,TransactionTimes)
 VALUES(4,150000,'06/01/2019')
 INSERT INTO COINTRADINGs(UserIDs,Valuess,TransactionTimes)
 VALUES(4,70000,'04/01/2019')

 INSERT INTO POSTINGs(UserIDs, Categorys, Type1s, Type2s, Addresss, URLImage1s, URLImage2s, URLImage3s, Costs, Conditions, Titles, Details, Transportations, PostTimes ,Statuss)
 VALUES(2, N'Giày dép', N'Cần bán', N'Cá nhân',N'Linh Trung Thủ Đức', 'img/giayluoiden-nam1.jpg', 'img/giayluoiden-nam2.jpg', 'img/giayluoiden-nam3.jpg', 99000, N'Mới', N'Giày nam đen', N'Giày nam đen, chất liệu cao cấp, bán tất cả các size.', N'Giao hàng bưu điện', '09:30:30 01/01/2019', '1')
 INSERT INTO POSTINGs(UserIDs, Categorys, Type1s, Type2s, Addresss, URLImage1s, URLImage2s, URLImage3s, Costs, Conditions, Titles, Details, Transportations, PostTimes ,Statuss)
 VALUES(2, N'Áo', N'Cần bán', N'Bán chuyên',N'Linh Trung Thủ Đức', 'img/aothun_mickey1.jpg', 'img/aothun_mickey2.jpg', 'img/aothun_mickey3.jpg', 100000, N'Mới', N'Áo thun Mickey', N'Áo thun cổ trơn mickey, chất liệu cao cấp, bán tất cả các size.', N'Giao hàng bưu điện', '09:30:30 02/01/2019', '3')
 INSERT INTO POSTINGs(UserIDs, Categorys, Type1s, Type2s, Addresss, URLImage1s, URLImage2s, URLImage3s, Costs, Conditions, Titles, Details, Transportations, PostTimes ,Statuss)
 VALUES(2, N'Quần', N'Cần bán', N'Cá nhân',N'Linh Trung Thủ Đức', 'img/quanjean_den_nam1.jpg', 'img/quanjean_den_nam2.jpg', 'img/quanjean_den_nam3.jpg', 89000, N'Đã sử dụng', N'Quần jean nam đen', N'Quần jean nam đen, chất liệu cao cấp, bán tất cả các size.', N'Giao hàng bưu điện', '09:30:30 03/01/2019', '2')
 INSERT INTO POSTINGs(UserIDs, Categorys, Type1s, Type2s, Addresss, URLImage1s, URLImage2s, URLImage3s, Costs, Conditions, Titles, Details, Transportations, PostTimes ,Statuss)
 VALUES(2, N'Mũ', N'Cần bán', N'Cá nhân',N'Linh Trung Thủ Đức', 'img/muluoitrai-fila1.jpg','img/muluoitrai-fila2.jpg','img/muluoitrai-fila3.jpg', 79000, N'Mới', N'Mũ lưỡi trai fila', N'Mũ lưỡi trai fila, chất liệu cao cấp, thời trang.', N'Gặp mặt giao hàng', '09:20:30 04/01/2019', '2')
 INSERT INTO POSTINGs(UserIDs, Categorys, Type1s, Type2s, Addresss, URLImage1s, URLImage2s, URLImage3s, Costs, Conditions, Titles, Details, Transportations, PostTimes ,Statuss)
 VALUES(3, N'Áo', N'Cần bán', N'Cá nhân',N'Linh Trung Thủ Đức', 'img/aothun_xanhinhinh1.jpg', 'img/aothun_xanhinhinh2.jpg','img/aothun_xanhinhinh3.jpg', 69000, N'Đã sử dụng', N'Áo thun xanh in hình', N'Áo thun xanh cổ trơn in hình, chất liệu cao cấp, bán tất cả các size cho cả nam và nữ.', N'Giao hàng bưu điện', '09:30:30 04/01/2019', '2')
 INSERT INTO POSTINGs(UserIDs, Categorys, Type1s, Type2s, Addresss, URLImage1s, URLImage2s, URLImage3s, Costs, Conditions, Titles, Details, Transportations, PostTimes ,Statuss)
 VALUES(3, N'Áo', N'Cần bán', N'Cá nhân',N'Linh Trung Thủ Đức','img/aothun_ngoisao1.jpg','img/aothun_ngoisao2.jpg','img/aothun_ngoisao1.jpg', 59000, N'Mới', N'Áo thun ngôi sao', N'Áo thun trắng thể thao, thiết kế thoáng mát, chất liệu bền, phù hợp với người chơi thể thao, bán tất cả các size cho cả nam và nữ.', N'Giao hàng bưu điện', '09:30:30 05/01/2019', '2')
 INSERT INTO POSTINGs(UserIDs, Categorys, Type1s, Type2s, Addresss, URLImage1s, URLImage2s, URLImage3s, Costs, Conditions, Titles, Details, Transportations, PostTimes ,Statuss)
 VALUES(4, N'Quần', N'Cần bán', N'Bán chuyên',N'Linh Trung Thủ Đức', 'img/quanjean_xanh_nu.jpg', null, null, 49000, N'Đã sử dụng', N'Quần jean nữ xanh', N'Quần jean nữ xanh, thời trang, cá tính', N'Gặp mặt giao hàng', '09:20:30 05/01/2019', '2')
 INSERT INTO POSTINGs(UserIDs, Categorys, Type1s, Type2s, Addresss, URLImage1s, URLImage2s, URLImage3s, Costs, Conditions, Titles, Details, Transportations, PostTimes ,Statuss)
 VALUES(4, N'Đầm xinh', N'Cần bán', N'Cá nhân',N'Linh Trung Thủ Đức', 'img/dam_den_caocap.jpg', null, null, 999000, N'Mới', N'Đầm đen cao cấp', N'Đầm đen cao cấp, vải rem, phong cách, hàng nhập khẩu.', N'Giao hàng bưu điện', '09:30:30 06/01/2019', '2')


--  INSERT INTO POSTINGs(UserIDs,Categorys,Type1s,Type2s,Addresss,URLImage1s,URLImage2s,URLImage3s, Conditions,Titles,Details,Transportations,PostTimes ,Statuss)
-- VALUES(2,N'Giày dép',N'Cần mua',N'Cá nhân',N'Linh Trung Thủ Đức',null,null,null,N'Mới',N'Giày nam đen',N'Giày nam đen, chất liệu cao cấp, bán tất cả các size.',N'Giao hàng bưu điện','03/01/2019','1')
-- INSERT INTO POSTINGs(UserIDs,Categorys,Type1s,Type2s,Addresss,URLImage1s,URLImage2s,URLImage3s, Conditions,Titles,Details,Transportations,Emails,PostTimes ,Statuss)
-- VALUES(2,N'Quần áo',N'Cần mua',N'Cá nhân',N'Linh Trung Thủ Đức',null,null,null,N'Cũ',N'Mua quần áo',N'Áo đẹp',N'Giao hàng',N'124@gmail.com','02/01/2019',N'Đã xóa')
-- INSERT INTO POSTINGs(UserIDs,Categorys,Type1s,Type2s,Addresss,URLImage1s,URLImage2s,URLImage3s, Conditions,Titles,Details,Transportations,Emails,PostTimes ,Statuss)
-- VALUES(3,N'Phụ kiện khác',N'Cần bán',N'Cửa hàng',N'Linh Đông Thủ Đức',null,null,null,N'Mới',N'Cần bán phụ kiện',N'Phụ kiện xinh',N'Giao hàng',N'126@gmail.com','03/01/2019',N'Đã duyệt')
--INSERT INTO POSTINGs(UserIDs,Categorys,Type1s,Type2s,Addresss,URLImage1s,URLImage2s,URLImage3s, Conditions,Titles,Details,Transportations,Emails,PostTimes ,Statuss)
-- VALUES(3,N'Đầm xinh',N'Cần mua',N'Cửa hàng',N'Linh Đông Thủ Đức',null,null,null,N'Mới',N'Mua đầm xinh',N'Đầm xinh',N'Giao hàng',N'129@gmail.com','03/01/2019',N'Đã duyệt')
--INSERT INTO POSTINGs(UserIDs,Categorys,Type1s,Type2s,Addresss,URLImage1s,URLImage2s,URLImage3s, Conditions,Titles,Details,Transportations,Emails,PostTimes ,Statuss)
-- VALUES(4,N'Mũ',N'Cần bán',N'Cá nhân',N'Linh Trung Thủ Đức',null,null,null,N'Mới',N'Bán mũ',N'Mũ đẹp',N'Giao hàng',N'127@gmail.com','04/01/2019',N'Chờ duyệt')


 INSERT INTO SERVICESs(Typess ,ServiceCosts)
 VALUES(N'Tin ưu tiên',10000)
 INSERT INTO SERVICESs(Typess ,ServiceCosts)
 VALUES(N'Nhãn nổi bật',7000)
  INSERT INTO SERVICESs(Typess ,ServiceCosts)
 VALUES(N'Tin đặc biệt',7000)
  INSERT INTO SERVICESs(Typess ,ServiceCosts)
 VALUES(N'Đẩy tin',5000)

 INSERT INTO SERVICETRADINGs(ServiceIDs,PostingIDs,TransactionTimes , ExecutionTimes )
 VALUES(1,3,'09:30:30 03/01/2019','09:30:30 04/01/2019')
 INSERT INTO SERVICETRADINGs(ServiceIDs,PostingIDs,TransactionTimes , ExecutionTimes )
 VALUES(2,3,'09:20:30 05/01/2019','09:20:30 05/01/2019')
 INSERT INTO SERVICETRADINGs(ServiceIDs,PostingIDs,TransactionTimes , ExecutionTimes )
 VALUES(3,3,'09:30:30 04/01/2019','09:30:30 05/01/2019')
 INSERT INTO SERVICETRADINGs(ServiceIDs,PostingIDs,TransactionTimes , ExecutionTimes )
 VALUES(4,4,'09:20:30 05/01/2019','09:20:30 06/01/2019')
 INSERT INTO SERVICETRADINGs(ServiceIDs,PostingIDs,TransactionTimes , ExecutionTimes )
 VALUES(3,5,'09:30:30 05/01/2019','09:30:30 06/01/2019')
 
 

 select *
 from USERs
 select *
 from COINTRADINGs
 select *
 from POSTINGs
 select *
 from SERVICESs
 select *
 from SERVICETRADINGs


 

 drop database webchothoitrang