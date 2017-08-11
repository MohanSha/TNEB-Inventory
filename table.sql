CREATE TABLE Surge_Arrestors_110KV(sno INT AUTO_INCREMENT PRIMARY KEY,equipment_name varchar(250) NOT NULL,make varchar(50) NOT NULL,R int(15)NOT NULL,Y int(15) NOT NULL,B int(15) NOT NULL,CT_ratio_available varchar(250) NOT NULL,CT_ratio_adopted varchar(250) NOT NULL,date_of_commisioning date NOT NULL,present_status varchar(250) NOT NULL,purchase_order varchar(250) NOT NULL);

INSERT INTO `surge_arrestors_110kv`(`equipment_name`, `make`, `R`, `Y`, `B`, `CT_ratio_available`, `CT_ratio_adopted`, `date_of_commisioning`, `present_status`, `purchase_order`) VALUES ('110 KV  LAs  of Auto Tr. IV','WS','919490','919488','919485','','','1992-07-01','In service','');

CREATE TABLE potential_transformer_110KV(sno INT AUTO_INCREMENT PRIMARY KEY,equipment_name varchar(250) NOT NULL,make varchar(50) NOT NULL,R int(15)NOT NULL,Y int(15) NOT NULL,B int(15) NOT NULL,CT_ratio_available varchar(250) NOT NULL,CT_ratio_adopted varchar(250) NOT NULL,date_of_commisioning date NOT NULL,present_status varchar(250) NOT NULL,purchase_order varchar(250) NOT NULL);

INSERT INTO `potential_transformer_110kv` (`sno`, `equipment_name`, `make`, `R`, `Y`, `B`, `CT_ratio_available`, `CT_ratio_adopted`, `date_of_commisioning`, `present_status`, `purchase_order`) VALUES (NULL, '110 KV PTs I Eastern bus', 'BHEL', '2221037', '2221047', '2221045', '110KV/110V', '110 KV/ 110 V', '1992-01-07', 'In service', '');

CREATE TABLE current_transformer_110KV (sno INT AUTO_INCREMENT PRIMARY KEY,equipment_name varchar(250) NOT NULL,make varchar(50) NOT NULL,R int(15)NOT NULL,Y int(15) NOT NULL,B int(15) NOT NULL,CT_ratio_available varchar(250) NOT NULL,CT_ratio_adopted varchar(250) NOT NULL,date_of_commisioning date NOT NULL,present_status varchar(250) NOT NULL,purchase_order varchar(250) NOT NULL);

INSERT INTO `current_transformer_110kv` (`sno`, `equipment_name`, `make`, `R`, `Y`, `B`, `CT_ratio_available`, `CT_ratio_adopted`, `date_of_commisioning`, `present_status`, `purchase_order`) VALUES (NULL, '110 KV Auto Tr. IV LV CTs', 'BHEL', '2237065', '2237066', '2237067', '1200-600-300-150/1A', '1200/1A(M&P)', '1992-01-07', 'In service', '')

CREATE TABLE breakers_110KV(sno INT AUTO_INCREMENT PRIMARY KEY,equipment_name varchar(250) NOT NULL,make varchar(50) NOT NULL,makers_no int(15) NOT NULL,capacity varchar(50) NOT NULL,date_of_commisioning date NOT NULL,present_status varchar(250) NOT NULL,medium varchar(250) NOT NULL,operating_mechanism varchar(250) NOT NULL,purchase_order varchar(250) NOT NULL);

INSERT INTO `breakers_110kv` (`sno`, `equipment_name`, `make`, `makers_no`, `capacity`, `date_of_commisioning`, `present_status`, `medium`, `operating_mechanism`, `purchase_order`) VALUES (NULL, '110 KV Auto Tr. IV LV Breaker', 'BHEL', '400835', '40 KA', '1992-01-07', 'In service', '', '', '')

CREATE TABLE surge_arrestors_230KV(sno INT AUTO_INCREMENT PRIMARY KEY,equipment_name varchar(250) NOT NULL,make varchar(50) NOT NULL,R varchar(15)NOT NULL,Y varchar(15) NOT NULL,B varchar(15) NOT NULL,date_of_commisioning date NOT NULL,present_status varchar(250) NOT NULL,purchase_order varchar(250) NOT NULL);

INSERT INTO `surge_arrestors_230kv` (`sno`, `equipment_name`, `make`, `R`, `Y`, `B`, `date_of_commisioning`, `present_status`, `purchase_order`) VALUES (NULL, '230 KV LAs of AUTO Tr. I', 'WS', 'Z784140A', 'Z784138A', 'Z784141A', '1987-03-13', 'In service', '');

CREATE TABLE capacitor_voltage_transformers_230KV(sno INT AUTO_INCREMENT PRIMARY KEY,equipment_name varchar(250) NOT NULL,make varchar(50) NOT NULL,makers_no int(15) NOT NULL,CVT_ratio_available varchar(50) NOT NULL,CVT_ratio_adopted varchar(50),date_of_commisioning date NOT NULL,present_status varchar(250) NOT NULL,purchase_order varchar(250) NOT NULL);

INSERT INTO `capacitor_voltage_transformers_230kv` (`sno`, `equipment_name`, `make`, `makers_no`, `CVT_ratio_available`, `CVT_ratio_adopted`, `date_of_commisioning`, `present_status`, `purchase_order`) VALUES (NULL, '230 KV NOKIA CVTs', 'BHEL', '6174302', '230KV/110 V', '230KV/110 V', '2008-11-17', 'In service', '');

CREATE TABLE potential_transformers_230KV(sno INT AUTO_INCREMENT PRIMARY KEY,equipment_name varchar(250) NOT NULL,make varchar(50) NOT NULL,R int(15)NOT NULL,Y int(15) NOT NULL,B int(15) NOT NULL,ratio_available varchar(50) NOT NULL,ratio_adopted varchar(50),date_of_commisioning date NOT NULL,present_status varchar(250) NOT NULL,purchase_order varchar(250) NOT NULL);

INSERT INTO `potential_transformers_230kv` (`sno`, `equipment_name`, `make`, `R`, `Y`, `B`, `ratio_available`, `ratio_adopted`, `date_of_commisioning`, `present_status`, `purchase_order`) VALUES (NULL, '230 KV PTs FOR BUS A', 'BHEL', '2212952', '2212954', '2212971', '230KV/110V', '230KV/110V', '1987-03-01', 'In service', '');

CREATE TABLE current_transformers_230KV(sno INT AUTO_INCREMENT PRIMARY KEY,equipment_name varchar(250) NOT NULL,make varchar(50) NOT NULL,R varchar(15)NOT NULL,Y varchar(15) NOT NULL,B varchar(15) NOT NULL,ratio_available varchar(50) NOT NULL,ratio_adopted varchar(50),date_of_commisioning date NOT NULL,present_status varchar(250) NOT NULL,purchase_order varchar(250) NOT NULL);

INSERT INTO `current_transformers_230kv` (`sno`, `equipment_name`, `make`, `R`, `Y`, `B`, `ratio_available`, `ratio_adopted`, `date_of_commisioning`, `present_status`, `purchase_order`) VALUES (NULL, '230 KV Auto Tr. I LV CTs', 'WS', '991240/99', '910987/99', '991242/99', '1600-1200-800-600/1A', '1200/1A(M&P)', '2000-05-29', 'In service', '');

CREATE TABLE breakers_230KV(sno INT AUTO_INCREMENT PRIMARY KEY,equipment_name varchar(250) NOT NULL,make varchar(50) NOT NULL,makers_no varchar(15) NOT NULL,capacity varchar(50) NOT NULL,date_of_commisioning date NOT NULL,present_status varchar(250) NOT NULL,medium varchar(250) NOT NULL,operating_mechanism varchar(250) NOT NULL,purchase_order varchar(250) NOT NULL);

INSERT INTO `breakers_230kv` (`sno`, `equipment_name`, `make`, `makers_no`, `capacity`, `date_of_commisioning`, `present_status`, `medium`, `operating_mechanism`, `purchase_order`) VALUES (NULL, '230 KV Auto Tr. I LV Breaker', 'CGL', '9949C', '40 KA', '1997-11-21', 'In service', '', '', '')

CREATE TABLE surge_arrestors_400KV(sno INT AUTO_INCREMENT PRIMARY KEY,equipment_name varchar(250) NOT NULL,make varchar(50) NOT NULL,R varchar(15)NOT NULL,Y varchar(15) NOT NULL,B varchar(15) NOT NULL,capacity varchar(50) NOT NULL,MCOV varchar(250) NOT NULL,year_of_MFG year NOT NULL,date_of_commisioning date NOT NULL,present_status varchar(250) NOT NULL,purchase_order varchar(250) NOT NULL);

INSERT INTO `surge_arrestors_400kv` (`sno`, `equipment_name`, `make`, `R`, `Y`, `B`, `capacity`, `MCOV`, `year_of_MFG`, `date_of_commisioning`, `present_status`, `purchase_order`) VALUES (NULL, '400 KV LAs of Auto Tr. I', 'ELPRO', '9L16BBA360', '9L16BBA361', '9L16BBA362', '', '', '', '1987-03-13', 'In service', '');

CREATE TABLE current_transformer_CVT_400KV(sno INT AUTO_INCREMENT PRIMARY KEY,equipment_name varchar(250) NOT NULL,make varchar(50) NOT NULL,R int(15)NOT NULL,Y int(15) NOT NULL,B int(15) NOT NULL,ratio_available varchar(50) NOT NULL,ratio_adopted varchar(50),date_of_commisioning date NOT NULL,present_status varchar(250) NOT NULL,purchase_order varchar(250) NOT NULL);

INSERT INTO `current_transformer_cvt_400kv` (`sno`, `equipment_name`, `make`, `R`, `Y`, `B`, `ratio_available`, `ratio_adopted`, `date_of_commisioning`, `present_status`, `purchase_order`) VALUES (NULL, '400 KV Auto Tr. I HV CTs', 'WS', '860621', '860622', '860623', '2000-1000-500/1A', '1000/1A(M&P)', '1987-03-13', 'In service', '');

CREATE TABLE current_transformer_CT_400KV(sno INT AUTO_INCREMENT PRIMARY KEY,equipment_name varchar(250) NOT NULL,make varchar(50) NOT NULL,R int(15)NOT NULL,Y int(15) NOT NULL,B int(15) NOT NULL,ratio_available varchar(50) NOT NULL,ratio_adopted varchar(50),date_of_commisioning date NOT NULL,present_status varchar(250) NOT NULL,purchase_order varchar(250) NOT NULL);

INSERT INTO `current_transformer_cvt_400kv` (`sno`, `equipment_name`, `make`, `R`, `Y`, `B`, `ratio_available`, `ratio_adopted`, `date_of_commisioning`, `present_status`, `purchase_order`) VALUES (NULL, '400 KV Auto Tr. I HV CTs', 'WS', '860621', '860622', '860623', '2000-1000-500/1A', '1000/1A(M&P)', '1987-03-13', 'In service', '');

CREATE TABLE breakers_400KV(sno INT AUTO_INCREMENT PRIMARY KEY,equipment_name varchar(250) NOT NULL,make varchar(50) NOT NULL,makers_no varchar(15) NOT NULL,type varchar(250) NOT NULL,breaking_capacity varchar(200) NOT NULL,year_of_MFG year NOT NULL,date_of_commisioning date NOT NULL,present_status varchar(250) NOT NULL,purchase_order varchar(250) NOT NULL);

INSERT INTO `breakers_400kv` (`sno`, `equipment_name`, `make`, `makers_no`, `type`, `breaking_capacity`, `year_of_MFG`, `date_of_commisioning`, `present_status`, `purchase_order`) VALUES (NULL, '400 KV Auto Tr. I HV Breaker', 'BHEL', '400096', '', '40 KA', '', '1987-03-13', 'In service', '');

CREATE TABLE auto_transformers_ICT(sno INT AUTO_INCREMENT PRIMARY KEY,equipment_name varchar(250) NOT NULL,voltage_level varchar(50),capacity varchar(50) NOT NULL,make varchar(50) NOT NULL,makers_no varchar(15) NOT NULL,no_of_taps int(50) NOT NULL,tap_position varchar(50) NOT NULL,year_of_MFG year NOT NULL,date_of_commisioning date NOT NULL,maximum_reached varchar(50) NOT NULL,present_status varchar(250) NOT NULL,purchase_order varchar(250) NOT NULL);

INSERT INTO `auto_transformers_ict` (`sno`, `equipment_name`, `voltage_level`, `capacity`, `make`, `makers_no`, `no_of_taps`, `tap_position`, `year_of_MFG`, `date_of_commisioning`, `maximum_reached`, `present_status`, `purchase_order`) VALUES (NULL, 'Auto Transformer-I', '400/230', '315 MVA', 'TELK', '1400085', '17', '', '', '1991-12-16', '', 'In service', '');

CREATE TABLE transmission_line(sno INT AUTO_INCREMENT PRIMARY KEY,feeders varchar(250) NOT NULL,volt varchar(20) NOT NULL, line_len varchar(250) NOT NULL,conn_ss varchar(250) NOT NULL,MW varchar(250) NOT NULL,MVAR varchar(250) NOT NULL,amps varchar(250) NOT NULL,date_time varchar(250) NOT NULL,tied_rad_cond varchar(250) NOT NULL,src_norm_feed varchar(250) NOT NULL,conductor varchar(250) NOT NULL);

INSERT INTO `transmission_line` (`sno`, `feeders`, `volt`, `line_len`, `conn_ss`, `MW`, `MVAR`, `amps`, `date_time`, `tied_rad_cond`, `src_norm_feed`, `conductor`) VALUES (NULL, '230KV Oragadam', '230', '14.24', '230KV SS, Oragadam', '156.11', '30', '406', '09.02.15', 'Grid', 'SOURCE', 'KUNDHA');