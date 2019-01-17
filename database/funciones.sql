DELIMITER $$
CREATE DEFINER=`root`@`localhost` FUNCTION `get_uuid`() RETURNS varchar(32) CHARSET utf8
BEGIN

RETURN upper(replace(uuid(),'-',''));
END$$
DELIMITER ;
