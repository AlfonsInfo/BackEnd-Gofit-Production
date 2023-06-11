<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared("
            CREATE TRIGGER increment_struk_transaksi
            BEFORE INSERT ON transaksi_member
            FOR EACH ROW
            BEGIN
                DECLARE year_prefix VARCHAR(2);
                DECLARE month_prefix VARCHAR(2);
                SET @next_id = (SELECT IFNULL(
                    MAX(
                        CAST(
                            RIGHT(no_struk_transaksi, LOCATE(
                                '.', REVERSE(no_struk_transaksi)
                            ) 
                                - 1)AS UNSIGNED
                        ) 
                    ), 0
                ) + 1 FROM transaksi_member);
                SET year_prefix = DATE_FORMAT(NEW.created_at, '%y');
                SET month_prefix = DATE_FORMAT(NEW.created_at, '%m');
                IF( @next_id < 10 ) THEN
                    SET NEW.no_struk_transaksi = CONCAT(year_prefix, '.', month_prefix, '.', LPAD(@next_id, 2, '0'));
                ELSE
                    SET NEW.no_struk_transaksi = CONCAT(year_prefix, '.', month_prefix, '.', @next_id);
                END IF;
            END

        ");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared('DROP TRIGGER `increment_struk-transaksi`');
    }
};

// VERSI LAMA
// CREATE TRIGGER `increment_struk-transaksi` BEFORE INSERT ON `transaksi_member` FOR EACH ROW 
// BEGIN 
// DECLARE last_id INT; 
// DECLARE new_id VARCHAR(255); 
// SET last_id = ( 
//     SELECT MAX(RIGHT(no_struk_transaksi, 3)) 
//     FROM transaksi_member ); 
// IF last_id IS NULL THEN 
//     SET new_id = CONCAT(DATE_FORMAT(NOW(), '%y.%m.'), '001'); 
// ELSE 
//     SET new_id = CONCAT(DATE_FORMAT(NOW(), '%y.%m.'), LPAD(last_id + 1, 3, '0')); 
// END IF; 
// SET NEW.no_struk_transaksi = new_id; 
// END
