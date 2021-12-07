
CREATE TABLE IF NOT EXISTS `PointsHistory`(
    `id` int AUTO_INCREMENT PRIMARY KEY,
    `point_change` int,
    `user_id` int,
    `reason` VARCHAR(100),
    `created` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES Users(id),
    check (point_change != 0)
)