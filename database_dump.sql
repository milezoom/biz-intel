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

