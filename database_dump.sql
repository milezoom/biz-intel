--
-- PostgreSQL database dump
--

SET statement_timeout = 0;
SET lock_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SET check_function_bodies = false;
SET client_min_messages = warning;

--
-- Name: plpgsql; Type: EXTENSION; Schema: -; Owner: 
--

CREATE EXTENSION IF NOT EXISTS plpgsql WITH SCHEMA pg_catalog;


--
-- Name: EXTENSION plpgsql; Type: COMMENT; Schema: -; Owner: 
--

COMMENT ON EXTENSION plpgsql IS 'PL/pgSQL procedural language';


SET search_path = public, pg_catalog;

SET default_tablespace = '';

SET default_with_oids = false;

--
-- Name: awareness; Type: TABLE; Schema: public; Owner: milezoom; Tablespace: 
--

CREATE TABLE awareness (
    nama character varying(35) NOT NULL,
    umur smallint DEFAULT 0 NOT NULL,
    jenis_kelamin character varying(10) NOT NULL,
    daerah character varying(20) NOT NULL,
    is_know boolean NOT NULL
);


--
-- Name: keuntungan; Type: TABLE; Schema: public; Owner: milezoom; Tablespace: 
--

CREATE TABLE keuntungan (
    tahun smallint NOT NULL,
    pendapatan integer NOT NULL
);


--
-- Name: performance; Type: TABLE; Schema: public; Owner: milezoom; Tablespace: 
--

CREATE TABLE performance (
    divisi character varying(30) NOT NULL,
    nama character varying(35) NOT NULL,
    jenis_pekerjaan character varying(55) NOT NULL,
    lama_kerja smallint DEFAULT 0 NOT NULL,
    performa smallint DEFAULT 0 NOT NULL,
    kepemimpinan smallint DEFAULT 0 NOT NULL,
    kedisiplinan smallint DEFAULT 0 NOT NULL,
    time_management smallint DEFAULT 0 NOT NULL
);


--
-- Data for Name: awareness; Type: TABLE DATA; Schema: public; Owner: milezoom
--

COPY awareness (nama, umur, jenis_kelamin, daerah, is_know) FROM stdin;
Dika Idrus	27	laki-laki	jakarta	t
Mercy Syabantika	21	perempuan	jakarta	t
Eylien Saniyati	26	perempuan	bogor	f
Saqina Maulana	28	perempuan	bandung	t
Maharani Mukaffi	22	perempuan	padang	f
Sari Pinem	25	perempuan	jakarta	f
Richard Fadholi	19	laki-laki	depok	t
Sigit Ibidemu	20	laki-laki	bogor	t
Ariyadi Caroline	18	laki-laki	bandung	f
Demi Wijaya	19	laki-laki	bali	f
Deristya Novitasari	23	perempuan	depok	f
Aswin Ogie Prapastia	26	laki-laki	lombok	t
Fahmi Elleonora	25	laki-laki	jakarta	t
Aggil Edwin Anantarqi	28	laki-laki	tangerang	f
Kemal Kurniawan	26	laki-laki	bandung	t
Rofiqotul Ratnasari	22	perempuan	jakarta	f
Suci Delmeizar	20	perempuan	bekasi	t
Hanako Novita	20	perempuan	medan	f
Deristya Novitasari	21	perempuan	depok	f
abdul latief	22	laki-laki	bogor	t
Fahmi Brugman	25	laki-laki	jakarta	t
afifi asnawi	27	laki-laki	tangerang	t
abimayu mulyawan	22	laki-laki	surabaya	f
Mubarak karimallah	26	laki-laki	solo	f
Pratama Setya	24	laki-laki	jakarta	t
Dela Larashaty	29	perempuan	bekasi	f
Natasya Natanael	32	perempuan	jakarta	t
Jesyca Ihatrayudha	31	perempuan	jakarta	t
Eti S	21	perempuan	depok	t
Dewi sartika	30	perempuan	medan	t
iman cahya	21	laki-laki	lombok	f
ferry irawan	22	laki-laki	jakarta	t
gina permata	27	perempuan	tangerang	f
hanan cindy	29	perempuan	bekasi	t
cut muthia	24	perempuan	bali	t
dery purnomo	23	laki-laki	padang	t
karmina putri	24	perempuan	jakarta	f
putra permana	26	laki-laki	jogjakarta	t
Nanda Obara	27	laki-laki	padang	t
Ardha Satrio	19	laki-laki	bali	f
Achmad Asriandari	18	laki-laki	jakarta	f
Syarief Sastrawan	20	laki-laki	bekasi	f
Bob Fathoni	35	laki-laki	bogor	t
Bayu Chaironi	20	laki-laki	depok	t
gerry hutabalung	28	laki-laki	medan	f
firman el yusra	29	laki-laki	jakarta	t
kania afifa	31	perempuan	tangerang	f
rendy rizki	25	laki-laki	tangerang	f
milla kamilla	21	perempuan	jakarta	f
try nurhidayati	20	perempuan	jakarta	t
ahmad rifai	20	laki-laki	depok	f
egi gilang	31	laki-laki	jakarta	t
aulia rizqi	29	laki-laki	bali	t
febby febiola	25	perempuan	bogor	f
keisha permata	19	perempuan	palembang	f
tommy halim	21	laki-laki	jakarta	t
ibnu aziz	20	laki-laki	depok	t
nathan saragih	23	laki-laki	lombok	f
dina tiara	19	perempuan	solo	t
Gilang ramadhan	31	laki-laki	surabaya	f
abdurahman faisal	20	laki-laki	jakarta	f
Indri Wahyuni	27	perempuan	depok	t
patrecia amanda	29	perempuan	padang	t
Ayu sulistiorini	24	perempuan	bogor	t
dania daniswari	19	perempuan	bandung	f
Thalita latif	21	perempuan	jakarta	t
Ira Rahmawati	22	perempuan	tangerang	t
Mukti setya	20	laki-laki	jogjakarta	f
Ridho Rahmadi	21	laki-laki	bekasi	t
Ahmad Maulana	20	laki-laki	palembang	f
muhammad ismail	23	laki-laki	jakarta	f
abdurrahman faisal	19	laki-laki	bandung	f
kartika sari dewi	35	perempuan	depok	t
megawati	20	perempuan	bali	f
putra eka mahardika	30	laki-laki	medan	t
adrian tamora	23	laki-laki	jakarta	t
aina nur syifa	26	perempuan	bogor	t
Aldi Kusuma	28	laki-laki	tangerang	t
Cahyadi Usman	25	laki-laki	palembang	f
Adelia silmi kaffa	20	perempuan	bekasi	t
Ariana fatin	19	perempuan	solo	t
Araminta	20	perempuan	jakarta	f
Azka labibbah	20	laki-laki	jakarta	f
Aqila Fajri	31	perempuan	tangerang	f
Hakim Junaydi	34	laki-laki	bandung	t
Rangga Pahlevi	27	laki-laki	tangerang	f
Angga Bima Soeharto	30	laki-laki	bogor	t
Fidela Annisa	26	perempuan	depok	t
Inge Najjuba	22	perempuan	surabaya	t
Ralissta harun	19	perempuan	solo	f
Hardi Gilang Ramadhan	25	laki-laki	jakarta	f
Elsa Ramadhani	18	laki-laki	padang	t
Novita Sari	26	perempuan	jakarta	f
Imam Habibiansyah	21	laki-laki	bali	t
Adeeva syakila	19	perempuan	depok	f
Abid Abyana	34	laki-laki	bekasi	f
Nabil abi barizah	23	laki-laki	jakarta	t
Saraya Sabrina	32	perempuan	bogor	t
Reninta dariesa	20	perempuan	lombok	f
amira urwatun	21	perempuan	aceh	f
\.


--
-- Data for Name: keuntungan; Type: TABLE DATA; Schema: public; Owner: milezoom
--

COPY keuntungan (tahun, pendapatan) FROM stdin;
2010	50000000
2011	80000000
2012	100000000
2013	140000000
2014	180000000
2015	200000000
\.


--
-- Data for Name: performance; Type: TABLE DATA; Schema: public; Owner: milezoom
--

COPY performance (divisi, nama, jenis_pekerjaan, lama_kerja, performa, kepemimpinan, kedisiplinan, time_management) FROM stdin;
Engineer	Hani Maharani	Software Engineer	8	65	76	81	61
Engineer	Risma Kahfi	Release Engineer	12	83	72	60	70
Engineer	Ruthcharuni Amanda	IT Security Analyst	6	65	87	69	76
Engineer	Mega Mawaldi	Data Engineer	5	75	84	91	78
Engineer	Emir Verev	Test Engineer	3	62	79	85	75
Engineer	Haikal Omar Purwahyuningrum	System Administrator	14	63	66	84	69
Technical Infrastructure	Bimo Melinda	Database Administrator	6	73	70	84	81
Technical Infrastructure	Fildzah Pinkanatalini	Network Engineer 	16	76	84	61	76
Technical Infrastructure	fulda Azzad	UI Engineer	12	69	67	87	70
Design	Dian Diah Erditya	UX Designer	9	72	79	81	83
Design	Rahman Sunanto	UI Designer	13	81	69	84	88
Design	Frisca Andrawida	Graphic Designer	8	79	70	85	79
Design	Tifany Liandra Elvira	Ilustrator	7	63	69	85	78
Design	Bara sutiana	Motion Gaphic Designer	17	76	65	77	83
Design	Devato Prahasto	Videographer	10	91	69	69	81
Design	Fahrian Gusti	Search Engine Optimization (SEO) Specialist	15	77	61	90	81
Internet Marketing	Adisti Zakia	Search Engine Marketing (SEM) Specialist	12	69	59	79	79
Internet Marketing	Cakra Abelardo	Data Scientist	10	83	74	79	68
Internet Marketing	Surya Subekti	Public Relations	13	71	68	85	78
Marketing	Deka Kurniansyah	Marketing Communications	8	69	76	83	76
Marketing	Jeremiah Sharifa	Business Merchant Development	14	84	79	70	83
Marketing	Ari Yunika	HR Recuitment Specialist	13	81	76	70	90
Human Resource	Edwin Herdani	HR Generalist Compensation & Benefit Specialist	8	82	78	79	82
Human Resource	Ferhat Sumandi Sucipto	Operational Custome Care Specialist	4	81	67	69	86
Operational Team	Mirza Farandy	Operational Transaction Specialist	11	76	68	79	85
Operational Team	Aldi Natanael	Senior Business Development	16	78	68	72	69
Others	Khansa Alim	Senior Internal Auditor Specialist	13	75	72	82	89
Others	Ismiranti Sukosulistiowani	Senior Accounting & Finance	15	91	78	83	76
Others	Indah Zahra	Legal	5	79	85	89	75
Others	Fika Viena	Fraud Prevention Specialist	7	76	68	90	81
\.


--
-- Name: awareness_pkey; Type: CONSTRAINT; Schema: public; Owner: milezoom; Tablespace: 
--

ALTER TABLE ONLY awareness
    ADD CONSTRAINT awareness_pkey PRIMARY KEY (nama, umur, daerah);


--
-- Name: keuntungan_pkey; Type: CONSTRAINT; Schema: public; Owner: milezoom; Tablespace: 
--

ALTER TABLE ONLY keuntungan
    ADD CONSTRAINT keuntungan_pkey PRIMARY KEY (tahun);


--
-- Name: performance_pkey; Type: CONSTRAINT; Schema: public; Owner: milezoom; Tablespace: 
--

ALTER TABLE ONLY performance
    ADD CONSTRAINT performance_pkey PRIMARY KEY (divisi, nama);


--
-- Name: public; Type: ACL; Schema: -; Owner: postgres
--

REVOKE ALL ON SCHEMA public FROM PUBLIC;
REVOKE ALL ON SCHEMA public FROM postgres;
GRANT ALL ON SCHEMA public TO postgres;
GRANT ALL ON SCHEMA public TO PUBLIC;


--
-- PostgreSQL database dump complete
--

