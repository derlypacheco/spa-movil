

-- Tabla de permisos
-- usuarios (v, c, ,e, d)
-- task (v, c, ,e, d)
-- servicios (v, c, ,e, d)

create table global_permission
(
    id_permission int auto_increment,
    name_perm varchar(180) not null,
    date_perm date null,
    active_perm char default 1 not null,
    user_c bool default false not null,
    user_e bool default false not null,
    user_v bool default false not null,
    user_d bool default false not null,
    task_v bool default false not null,
    task_c bool default false not null,
    task_e bool default false not null,
    task_d bool default false not null,
    service_v bool default false not null,
    service_c bool default false not null,
    service_e bool default false not null,
    service_d bool default false not null,
    constraint global_permission_pk
        primary key (id_permission)
);



CREATE TABLE `controls`.`global_users` (
`id_users` INT UNSIGNED NOT NULL AUTO_INCREMENT,
 `user_user` VARCHAR(45) NOT NULL,
`password_user` VARCHAR(100) NOT NULL,
`fullname_user` VARCHAR(255) NOT NULL,
`mail_user` VARCHAR(85) NOT NULL,
`picture_user` TEXT NULL,
`relog_user` VARCHAR(25) NULL,
 `datestart_user` DATE NOT NULL,
`company_user` INT(11) NOT NULL,
 `cellphone_user` VARCHAR(60) NULL,
 `departament_user` VARCHAR(45) NULL,
 `token_user` VARCHAR(145) NULL,
  `active_user` CHAR(1) NOT NULL,
  `desc_user` TEXT NULL,
PRIMARY KEY (`id_users`));

ALTER TABLE `controls`.`global_users`
    ADD COLUMN `id_permission` INT(11) NOT NULL AFTER `desc_user`;

ALTER TABLE `controls`.`global_users`
    CHANGE COLUMN `picture_user` `picture_user` TEXT NULL DEFAULT 'src/img/avatar/default.jpg' ;

create unique index global_users_user_user_uindex
	on global_users (user_user);

-- Stored Procedures

USE `controls`;
DROP procedure IF EXISTS `sp_login_app`;

DELIMITER $$
USE `controls`$$
CREATE PROCEDURE `sp_login_app`(
varUser varchar(45),
varPass varchar(100)
)
BEGIN
select * from global_users where user_user = varUser and password_user = sha1(varPass);
END$$
DELIMITER ;
