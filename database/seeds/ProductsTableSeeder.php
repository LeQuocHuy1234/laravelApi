<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arr = [
            'https://media3.scdn.vn/img3/2019/5_24/QjJ7JY_simg_b5529c_250x250_maxb.jpg',
            'https://media3.scdn.vn/img3/2019/5_12/zp1EUT_simg_b5529c_250x250_maxb.jpg',
            'https://media3.scdn.vn/img3/2019/5_12/oSFOcG_simg_b5529c_250x250_maxb.jpg',
            'https://media3.scdn.vn/img3/2019/5_12/sSRrIP_simg_b5529c_250x250_maxb.jpg',
            'https://media3.scdn.vn/img3/2019/5_12/yXHhhJ_simg_b5529c_250x250_maxb.jpg',
            'https://media3.scdn.vn/img3/2019/5_12/Ux6RLi_simg_b5529c_250x250_maxb.jpg',
            'https://media3.scdn.vn/img3/2019/6_5/INy4lt_simg_b5529c_250x250_maxb.jpg',
            'https://media3.scdn.vn/img3/2019/6_5/kDJ2sX_simg_b5529c_250x250_maxb.jpg',
            'https://media3.scdn.vn/img3/2019/6_12/bakrVk_simg_b5529c_250x250_maxb.jpg',
            'https://media3.scdn.vn/img3/2019/6_12/Kv7AIS_simg_b5529c_250x250_maxb.jpg',
        ];

        for($i = 0; $i < 10; $i++) {
            DB::table('products')->insert([
                'name' => 'Sản phẩm '. ($i + 1),
                'image' => $arr[$i],
                'price' => 100000,
                'sale_price' => 80000,
                'content' => 'Được sản xuất từ chất liệu Linen linh hoạt khi co giãn, đặc biệt thoáng mát và hút mồ hôi cực nhanh.Tone màu nhẹ nhàng là lựa chọn tối ưu trong những ngày nóng bức.'
            ]);
        }
    }
}
