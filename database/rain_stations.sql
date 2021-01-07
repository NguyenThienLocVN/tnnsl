CREATE TABLE rain_stations(
id DOUBLE,
station_name VARCHAR(100),
station_code VARCHAR(100),
station_type VARCHAR(100),
district VARCHAR(100),
region VARCHAR(100),
latitude DOUBLE,
longitude DOUBLE
);

INSERT INTO rain_stations(id, station_name, station_code, station_type, district, region, latitude, longitude)
VALUES
(
1, 'Tà Cọ', 'TCO', 'TREN2MW', 'SCO', 'TVNCO', 20.966667, 103.533333
);

INSERT INTO rain_stations(id, station_name, station_code, station_type, district, region, latitude, longitude)
VALUES
(
2, 'Nậm Công 3', 'NCO3', 'TREN2MW', 'SMA', 'TVNCO', 20.966667, 103.683333
);

INSERT INTO rain_stations(id, station_name, station_code, station_type, district, region, latitude, longitude)
VALUES
(
3, 'Nậm Chim 1', 'NCHIM1', 'TREN2MW', 'BYE', 'TVSSA', 20.916667, 103.35
);

INSERT INTO rain_stations(id, station_name, station_code, station_type, district, region, latitude, longitude)
VALUES
(
4, 'Nậm Sập 1', 'NSA1', 'TREN2MW', 'PYE', 'TVSSA', 20.966667, 103.25
);

INSERT INTO rain_stations(id, station_name, station_code, station_type, district, region, latitude, longitude)
VALUES
(
5, 'Nậm Sập 2', 'NSA2', 'TREN2MW', 'PYE', 'TVSSA', 21.583333, 103.916667
);

INSERT INTO rain_stations(id, station_name, station_code, station_type, district, region, latitude, longitude)
VALUES
(
6, 'Nậm Sập 3', 'NSA3', 'TREN2MW', 'PYE', 'TVSSA', 21.716667, 103.666667
);

INSERT INTO rain_stations(id, station_name, station_code, station_type, district, region, latitude, longitude)
VALUES
(
7, 'Nậm Sọi', 'NSO', 'TREN2MW', 'SMA', 'TVNSO', 21.266667, 104.65
);