create table sensores (
	id serial primary Key,
	hall text,
	humedad text,
	uv text,
	luz_ambiiente text,
	bateria text,
	presion text,
	sonido text,
	temperatura text,
	EC02 text;
    TVOC text;
    fieldstrength text;
    devEUI text;
	fCnt text;
	fPort text;
	rxInfo_gatewayID text;
	rxInfo_rssi text;
	rxInfo_loRaSNR text;
	txfrec text;
	txdr text;
	fecha date default current_date,
	hora time default current_time
);

create table avisos (
	id serial primary key,
	estado text,
	fecha date default current_date,
	hora time default current_time
);
