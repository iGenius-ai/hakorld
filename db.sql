-- Users table
CREATE TABLE `hakorld`.`users` ( 
  `id` INT(11) NOT NULL AUTO_INCREMENT , 
  `firstname` VARCHAR(255) NOT NULL , 
  `lastname` VARCHAR(255) NOT NULL , 
  `email` VARCHAR(255) NOT NULL , 
  `phone` VARCHAR(255) NOT NULL , 
  `password` VARCHAR(255) NOT NULL , 
  `title` VARCHAR(255) NOT NULL , 
  `company` VARCHAR(255) NOT NULL , 
  `created_at` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP , 
  PRIMARY KEY (`id`)
) ENGINE = InnoDB;

-- Submissions table
CREATE TABLE `hakorld`.`submissions` ( 
  `id` INT(11) NOT NULL AUTO_INCREMENT , 
  `user_id` INT(11) NOT NULL , 
  `title` VARCHAR(255) NOT NULL , 
  `track` VARCHAR(255) NOT NULL , 
  `secondary` VARCHAR(255) NOT NULL , 
  `format` VARCHAR(255) NOT NULL , 
  `tracksubmitreason` TEXT NOT NULL , 
  `abstract` TEXT NOT NULL , 
  `outline` TEXT NOT NULL , 
  `newcontent` TINYINT(4) NOT NULL , 
  `oldcontent` TEXT NOT NULL , 
  `newresearch` TEXT NOT NULL , 
  `takeaways` TEXT NOT NULL , 
  `solveproblem` TEXT NOT NULL , 
  `newtool` TINYINT(4) NOT NULL , 
  `tooloption` VARCHAR(255) NOT NULL , 
  `newvulnerable` TINYINT(4) NOT NULL , 
  `disclosevulnerable` TINYINT(4) NOT NULL , 
  `discloseprocess` TEXT NOT NULL , 
  `demo` TINYINT(4) NOT NULL , 
  `presenter` TEXT NOT NULL , 
  `event` VARCHAR(255) NOT NULL , 
  `videosample` VARCHAR(255) NOT NULL , 
  `reviewmessage` TEXT NOT NULL , 
  `fileupload` VARCHAR(255) NOT NULL , 
  `speakers` VARCHAR(255) NOT NULL , 
  `created_at` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP , 
  PRIMARY KEY (`id`)
) ENGINE = InnoDB;

-- Speakers table
CREATE TABLE `hakorld`.`speakers` ( 
  `id` INT(11) NOT NULL AUTO_INCREMENT , 
  `first_name` VARCHAR(255) NOT NULL , 
  `last_name` VARCHAR(255) NOT NULL , 
  `nameDisplay` VARCHAR(255) NOT NULL , 
  `email` VARCHAR(255) NOT NULL , 
  `phone` VARCHAR(255) NOT NULL , 
  `title` VARCHAR(255) NOT NULL , 
  `organization` VARCHAR(255) NOT NULL , 
  `country` VARCHAR(255) NOT NULL , 
  `usStateSelect` VARCHAR(255) NOT NULL , 
  `caStateSelect` VARCHAR(255) NOT NULL , 
  `twitter` VARCHAR(255) NOT NULL , 
  `website` VARCHAR(255) NOT NULL , 
  `linkedinUrl` VARCHAR(255) NOT NULL , 
  `bio` TEXT NOT NULL , 
  `prevPresent` VARCHAR(255) NOT NULL , 
  `badge_name` VARCHAR(255) NOT NULL , 
  `badge_org` VARCHAR(255) NOT NULL , 
  `cissp` VARCHAR(255) NOT NULL , 
  `meal` VARCHAR(255) NOT NULL , 
  `created_at` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP , 
  PRIMARY KEY (`id`)
) ENGINE = InnoDB; 