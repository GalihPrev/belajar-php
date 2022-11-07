create database fakultas;
use fakultas;

-- table: jurusan 
create table jurusan (
id_jurusan int(11) not null auto_increment,
kode_jurusan varchar(10) not null,
nama_jurusan varchar(50) not null,
primary key (id_jurusan)
);

-- Table: mahasiswa
create table mahasiswa (
id_mahasiswa int(11) not null auto_increment,
nim varchar(10) not null,
nama varchar(50) not null,
alamat varchar(50) not null,
tempat_lahir varchar(50) not null,
tanggal_lahir date not null,
jenis_kelamin enum('L','P') not null,
kode_jurusan varchar(10) not null,
id_jurusan int(11) not null,
primary key (id_mahasiswa),
foreign key (id_jurusan) references jurusan(id_jurusan)
);

-- -- Table: matakuliah
-- create table matakuliah (
-- kode_mk varchar(10) not null,
-- nama_mk varchar(50) not null,
-- sks int not null,
-- primary key (kode_mk)
-- );

-- -- Table: nilai
-- create table nilai (
-- id_nilai int(11) not null auto_increment,
-- nim varchar(10) not null,
-- kode_mk varchar(10) not null,
-- nilai int(11) not null,
-- primary key (id_nilai),
-- foreign key (nim) references mahasiswa(nim),
-- foreign key (kode_mk) references matakuliah(kode_mk)
-- );

-- insert table jurusan
insert into jurusan (kode_jurusan, nama_jurusan) values ('TI','Teknik Informatika');
insert into jurusan (kode_jurusan, nama_jurusan) values ('SI','Sistem Informasi');

-- insert table mahasiswa
insert into mahasiswa (nim, nama, alamat, tempat_lahir, tanggal_lahir, jenis_kelamin, kode_jurusan, id_jurusan) values ('1234567890','Galih Previand','Singosari','Malang','2002-03-23','L','TI',1);
insert into mahasiswa (nim, nama, alamat, tempat_lahir, tanggal_lahir, jenis_kelamin, kode_jurusan, id_jurusan) values ('312312312','Rizki','Jakarta','Bali','2002-03-23','L','TI',1);

-- update table mahasiswa
update mahasiswa set  nama='Galih Pr' where id_mahasiswa=1;

-- delete table mahasiswa
delete from mahasiswa where id_mahasiswa=2;

