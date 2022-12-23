CREATE DATABASE fakultas;

CREATE TABLE jurusan (
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    kode CHAR(4) NOT NULL,
    nama VARCHAR(50) NOT NULL
);

CREATE TABLE mahasiswii(
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    id_jurusan INTEGER NOT NULL,
    nim CHAR(8) NOT NULL,
    nama VARCHAR(50) NOT NULL,
    jenis_kelamin enum('laki-laki','perempuan') NOT NULL,
    tempat_lahir VARCHAR(50) NOT NULL,
    tanggal_lahir DATE NOT NULL,
    alamat VARCHAR(255) NOT NULL,
    FOREIGN KEY (id_jurusan) REFERENCES jurusan(id)
);
-- insert jurusan
INSERT INTO jurusan (kode, nama) VALUES ("PTIF", "Pendidikan Teknik Informatika");
-- insert mahasiswii
INSERT INTO mahasiswii (id_jurusan, nim, nama, jenis_kelamin, tempat_lahir, tanggal_lahir, alamat) VALUES (1, "20220001", "Fulan", "laki-laki", "Malang", "2002-25-05", "Jl. Soekarno Hatta 9");
-- update 
UPDATE mahasiswii SET tanggal_lahir = "2002-08-18" WHERE id = 2; 
-- delete
DELETE FROM mahasiswii WHERE id = 2;