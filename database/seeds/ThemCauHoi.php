<?php

use Illuminate\Database\Seeder;

class ThemCauHoi extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      // Lĩnh vực thể thao id = 1
        App\cau_hoi::create([
          'noi_dung'=>'Giải Grand Slam đầu tiên trong năm là giải nào?',
          'phuong_an_a'=>'Austrlia mở rộng',
          'phuong_an_b'=>'Wimbledon',
          'phuong_an_c'=>'Roland Garos',
          'phuong_an_d'=>'Mỹ mở rộng',
          'dap_an'=>'Wimbledon',
          'linh_vuc_id'=>'1'
        ]);
        App\cau_hoi::create([
          'noi_dung'=>'Cùng với Hà Nội T&T (vô địch V-League 2010), CLB nào của Việt Nam tham dự AFC Cup 2011?',
          'phuong_an_a'=>'Sông Lam Nghệ An',
          'phuong_an_b'=>'SHB Đà Nẵng',
          'phuong_an_c'=>'Hoàng Anh Gia Lai',
          'phuong_an_d'=>'Becamex Bình Dương',
          'dap_an'=>'Sông Lam Nghệ An',
          'linh_vuc_id'=>'1'
        ]);
        App\cau_hoi::create([
          'noi_dung'=>'AFC Asian Cup 2011 được tổ chức tại quốc gia nào?',
          'phuong_an_a'=>'Qatar',
          'phuong_an_b'=>'Hàn Quốc',
          'phuong_an_c'=>'Nhật Bản',
          'phuong_an_d'=>'Iraq',
          'dap_an'=>'Qatar',
          'linh_vuc_id'=>'1'
        ]);
        App\cau_hoi::create([
          'noi_dung'=>'Đội nào lên ngôi vô địch AFC Asian Cup 2011 tổ chức tại Qatar?',
          'phuong_an_a'=>'Nhật Bản',
          'phuong_an_b'=>'Australia',
          'phuong_an_c'=>'Hàn Quốc',
          'phuong_an_d'=>'Uzbekistan',
          'dap_an'=>'Nhật Bản',
          'linh_vuc_id'=>'1'
        ]);
        App\cau_hoi::create([
          'noi_dung'=>'Việt Nam lần đầu tiên vô địch AFF Cup là vào năm nào?',
          'phuong_an_a'=>'2004',
          'phuong_an_b'=>'2006',
          'phuong_an_c'=>'2008',
          'phuong_an_d'=>'2010',
          'dap_an'=>'2008',
          'linh_vuc_id'=>'1'
        ]);
        App\cau_hoi::create([
          'noi_dung'=>'CLB nào vô địch FIFA Club World Cup 2010 tổ chức tại Qatar?',
          'phuong_an_a'=>'Inter Milan',
          'phuong_an_b'=>'Real Madrid',
          'phuong_an_c'=>'Bayern Munich',
          'phuong_an_d'=>'Manchester United',
          'dap_an'=>'Inter Milan',
          'linh_vuc_id'=>'1'
        ]);
        App\cau_hoi::create([
          'noi_dung'=>'Vận động viên đứng đầu danh sách 100 vận động viên Việt Nam tiêu biểu của năm 2010 là vận động viên Vũ Thị Hương của môn thể thao nào?',
          'phuong_an_a'=>'Điền kinh',
          'phuong_an_b'=>'Cờ vua',
          'phuong_an_c'=>'Karatedo',
          'phuong_an_d'=>'Cầu lông',
          'dap_an'=>'Điền kinh',
          'linh_vuc_id'=>'1'
        ]);
        App\cau_hoi::create([
          'noi_dung'=>'Giải đua xe đạp vòng quanh nước Pháp năm 2001 có mấy chặng đua?',
          'phuong_an_a'=>'16',
          'phuong_an_b'=>'21',
          'phuong_an_c'=>'26',
          'phuong_an_d'=>'31',
          'dap_an'=>'21',
          'linh_vuc_id'=>'1'
        ]);
        App\cau_hoi::create([
          'noi_dung'=>'Vận động viên nào sau đây giành được huy chương vàng tại ASIAD 16 (tổ chức tại Quảng Châu-Trung Quốc 2010)?',
          'phuong_an_a'=>'Lê Bích Phương',
          'phuong_an_b'=>'Trương Thanh Hằng',
          'phuong_an_c'=>'Vũ Thị Hương',
          'phuong_an_d'=>'Lê Quang Liêm',
          'dap_an'=>'Lê Bích Phương',
          'linh_vuc_id'=>'1'
        ]);
        App\cau_hoi::create([
          'noi_dung'=>'Đội tuyển bóng đá nào xếp thứ ba tại World Cup 2010?',
          'phuong_an_a'=>'Tây Ban Nha',
          'phuong_an_b'=>'Hà Lan',
          'phuong_an_c'=>'Đức',
          'phuong_an_d'=>'Uruguaray',
          'dap_an'=>'Tây Ban Nha',
          'linh_vuc_id'=>'1'
        ]);
        App\cau_hoi::create([
          'noi_dung'=>'Trong môn quần vợt thì một năm có bao nhiêu giải Grand Slam được tổ chức?',
          'phuong_an_a'=>'3',
          'phuong_an_b'=>'4',
          'phuong_an_c'=>'5',
          'phuong_an_d'=>'6',
          'dap_an'=>'4',
          'linh_vuc_id'=>'1'
        ]);
        App\cau_hoi::create([
          'noi_dung'=>'Tại thể vận hội Olympic trẻ lần 1-2010 tại Singapore, thể thao Việt Nam giành được 4 huy chương, trong đó vận động viên nào giành được huy chương vàng duy nhất?',
          'phuong_an_a'=>'Thạch Kim Tuấn (cử tạ)',
          'phuong_an_b'=>'Nguyễn Thanh Thảo (Taekwondo)',
          'phuong_an_c'=>'Nguyễn Quốc Cương (Taekwondo)',
          'phuong_an_d'=>'Vũ Thị Trang (cầu lồng)',
          'dap_an'=>'Thạch Kim Tuấn (cử tạ)',
          'linh_vuc_id'=>'1'
        ]);
        App\cau_hoi::create([
          'noi_dung'=>'Nước nào là nước chủ nhà tại Copa America 2011?',
          'phuong_an_a'=>'Argentina',
          'phuong_an_b'=>'Boliviar',
          'phuong_an_c'=>'Venezuela',
          'phuong_an_d'=>'Paraguay',
          'dap_an'=>'Argentina',
          'linh_vuc_id'=>'1'
        ]);
        // Lĩnh vực Lịch sử id=2
        App\cau_hoi::create([
          'noi_dung'=>'Đại Ngu là quốc hiệu của triều đại nào?',
          'phuong_an_a'=>'Triều Ngô',
          'phuong_an_b'=>'Triều Hồ',
          'phuong_an_c'=>'Các chúa Nguyễn',
          'phuong_an_d'=>'Nhà Tây Sơn',
          'dap_an'=>'Triều Hồ',
          'linh_vuc_id'=>'2'
        ]);
        App\cau_hoi::create([
          'noi_dung'=>'Các vua Hùng đặt quốc hiệu nước ta là gì?',
          'phuong_an_a'=>'Văn Lang',
          'phuong_an_b'=>'Âu Lạc',
          'phuong_an_c'=>'Vạn Xuân',
          'phuong_an_d'=>'Đại Việt',
          'dap_an'=>'Văn Lang',
          'linh_vuc_id'=>'2'
        ]);
        App\cau_hoi::create([
          'noi_dung'=>'An Dương Vương đặt quốc hiệu nước ta là gì?',
          'phuong_an_a'=>'Âu Lạc',
          'phuong_an_b'=>'Vạn Xuân',
          'phuong_an_c'=>'Đại Cồ Việt',
          'phuong_an_d'=>'Đại Việt',
          'dap_an'=>'Âu Lạc',
          'linh_vuc_id'=>'2'
        ]);
        App\cau_hoi::create([
          'noi_dung'=>'Năm 1010, Lý Thái Tổ đã cho xây dựng điện nào ở trung tâm hoàng thành Thăng Long?',
          'phuong_an_a'=>'Điện Kính Thiên',
          'phuong_an_b'=>'Điện Càn Nguyên',
          'phuong_an_c'=>'Điện Càn Chánh',
          'phuong_an_d'=>'Điện Càn Thành',
          'dap_an'=>'Điện Kính Thiên',
          'linh_vuc_id'=>'2'
        ]);
        App\cau_hoi::create([
          'noi_dung'=>'Thành cổ Sơn Tây do vị vua nào xây dựng nên vào năm 1822?',
          'phuong_an_a'=>'Gia Long',
          'phuong_an_b'=>'Minh Mạng',
          'phuong_an_c'=>'Thiệu Trị',
          'phuong_an_d'=>'Tự Đức',
          'dap_an'=>'Minh Mạng',
          'linh_vuc_id'=>'2'
        ]);
        App\cau_hoi::create([
          'noi_dung'=>'Chùa nào được Lý Nam Đế cho xây sau khi lên ngôi hoàng đế năm 544 ? ',
          'phuong_an_a'=>'Chùa Trấn Quốc',
          'phuong_an_b'=>'Chùa Một Cột',
          'phuong_an_c'=>'Chùa Tây Phương',
          'phuong_an_d'=>'Chùa Tứ Pháp',
          'dap_an'=>'Chùa Trấn Quốc',
          'linh_vuc_id'=>'2'
        ]);
        App\cau_hoi::create([
          'noi_dung'=>'Vạn Thắng Vương là ai ? ',
          'phuong_an_a'=>'Đinh Bộ Lĩnh',
          'phuong_an_b'=>'Lê Hoàn',
          'phuong_an_c'=>'Lê Lợi',
          'phuong_an_d'=>'Nguyễn Huệ',
          'dap_an'=>'. Đinh Bộ Lĩnh',
          'linh_vuc_id'=>'2'
        ]);
        App\cau_hoi::create([
          'noi_dung'=>'Sau khi chiến thắng quân Nam Hán vào năm 938, Ngô Quyền đã đóng đô ở đâu?',
          'phuong_an_a'=>'Hoa Lư ',
          'phuong_an_b'=>'Đại La',
          'phuong_an_c'=>'Cổ Loa',
          'phuong_an_d'=>'Phú Xuân',
          'dap_an'=>'Cổ Loa',
          'linh_vuc_id'=>'2'
        ]);
        App\cau_hoi::create([
          'noi_dung'=>'Từ “nhị thánh” trong câu “ Đây là nơi chiến địa buổi Trùng Hưng nhị thánh bắt Ô Mã” (Bạch Đằng giang phú ) gồm những người nào ?',
          'phuong_an_a'=>'Ngô Quyền và Trần Hưng Đạo',
          'phuong_an_b'=>'Ngô Quyền và Trần Thái Tông',
          'phuong_an_c'=>'Ngô Quyền và Trần Nhân Tông',
          'phuong_an_d'=>'Trần Thánh Tông và Trần Nhân Tông.',
          'dap_an'=>'Ngô Quyền và Trần Hưng Đạo',
          'linh_vuc_id'=>'2'
        ]);
        App\cau_hoi::create([
          'noi_dung'=>'Hổ Quyền dưới thời nhà Nguyễn là một đấu trường của những cuộc tử chiến giữa hổ và loài động vật nào? ',
          'phuong_an_a'=>'Bò tót',
          'phuong_an_b'=>'Báo',
          'phuong_an_c'=>'Voi',
          'phuong_an_d'=>'Chó',
          'dap_an'=>'Voi',
          'linh_vuc_id'=>'2'
        ]);
        App\cau_hoi::create([
          'noi_dung'=>'Vị tướng nào dưới thời Hai Bà Trưng là ông tổ của lò vật Mai Động?',
          'phuong_an_a'=>'Ông Đông Bảng',
          'phuong_an_b'=>'Ông Đông Bảng',
          'phuong_an_c'=>'Tam Trinh',
          'phuong_an_d'=>'Đào Kỳ',
          'dap_an'=>'Tam Trinh',
          'linh_vuc_id'=>'2'
        ]);
        App\cau_hoi::create([
          'noi_dung'=>'12:Tập “Dư địa chí” được Nguyễn Trãi soạn dưới triều vua nào?',
          'phuong_an_a'=>'Lê Thái Tổ',
          'phuong_an_b'=>'Lê Thái Tông',
          'phuong_an_c'=>'Lê Thánh Tông',
          'phuong_an_d'=>'Lê Hiến Tông',
          'dap_an'=>'Lê Thái Tông',
          'linh_vuc_id'=>'2'
        ]);
        //Lĩnh vực âm nhạc phim  id =3
        App\cau_hoi::create([
          'noi_dung'=>'Ai là nhạc sĩ Việt Nam đầu tiên viết opera với tác phẩm “Cô sao” và sau đó là “Người tạc tượng”?',
          'phuong_an_a'=>'Đỗ Nhuận',
          'phuong_an_b'=>'Hoàng Vân',
          'phuong_an_c'=>'Trần Hoàn',
          'phuong_an_d'=>'Trọng Đài',
          'dap_an'=>'Đỗ Nhuận',
          'linh_vuc_id'=>'3'
        ]);
        App\cau_hoi::create([
          'noi_dung'=>'The ASEAN WAY-ca khúc chính thức của ASEAN là sáng tác của nhạc sĩ người nước nào?',
          'phuong_an_a'=>'Thái Lan',
          'phuong_an_b'=>'Việt Nam',
          'phuong_an_c'=>'Singapore',
          'phuong_an_d'=>'Malysia',
          'dap_an'=>'Thái Lan',
          'linh_vuc_id'=>'3'
        ]);
        App\cau_hoi::create([
          'noi_dung'=>'“Mùa con ong đi lấy mật, mùa con voi xuống sông hút nước, mùa em đi phát rẫy làm nương, anh vào rừng đặt bẫy cài chông” là những câu hát nói về tháng nào?',
          'phuong_an_a'=>'Tháng Giêng',
          'phuong_an_b'=>'Tháng hai',
          'phuong_an_c'=>'Tháng ba',
          'phuong_an_d'=>'Tháng tư',
          'dap_an'=>'Tháng ba',
          'linh_vuc_id'=>'3'
        ]);
        App\cau_hoi::create([
          'noi_dung'=>'Bộ phim “The Social Network” về mạng xã hội nào đã đạt giải Quả cầu vàng 2011?',
          'phuong_an_a'=>'Facebook',
          'phuong_an_b'=>'Twitter',
          'phuong_an_c'=>'yahoo Plus',
          'phuong_an_d'=>'Opera',
          'dap_an'=>'Facebook',
          'linh_vuc_id'=>'3'
        ]);
        App\cau_hoi::create([
          'noi_dung'=>'Lã Thanh Huyền đã tham gia bộ phim nào sau đây?',
          'phuong_an_a'=>'Nhà có nhiều cửa sổ',
          'phuong_an_b'=>'Đẹp từng centimet',
          'phuong_an_c'=>'Blog nàng dâu',
          'phuong_an_d'=>'Ngôi nhà hạnh phúc',
          'dap_an'=>'Blog nàng dâu',
          'linh_vuc_id'=>'3'
        ]);
        App\cau_hoi::create([
          'noi_dung'=>'Tác phẩm điện ảnh "Thập diện mai phục" là của đạo diễn nào?',
          'phuong_an_a'=>'Lý An',
          'phuong_an_b'=>'Dương Khiết',
          'phuong_an_c'=>'Trương Nghệ Mưu',
          'phuong_an_d'=>'Ngô Vũ Sâm ',
          'dap_an'=>'Trương Nghệ Mưu',
          'linh_vuc_id'=>'3'
        ]);
        App\cau_hoi::create([
          'noi_dung'=>'Nam ca sĩ nào đạt giải thưởng Ca sĩ của năm tại Lễ trao giải Làn Sóng Xanh 2010?',
          'phuong_an_a'=>'Đàm Vĩnh Hưng',
          'phuong_an_b'=>'Lam Trường',
          'phuong_an_c'=>'Đan Trường',
          'phuong_an_d'=>'Minh Quân',
          'dap_an'=>'Đàm Vĩnh Hưng',
          'linh_vuc_id'=>'3'
        ]);
        App\cau_hoi::create([
          'noi_dung'=>'NSND  .... là giảng viên thanh nhạc đầu tiên của Nhạc viện Hà Nội, là nghệ sĩ hát opera đầu tiên của Việt Nam và là người vào vai chính của vở opera đầu tiên được dàn dựng và công diễn ở Nhà hát Lớn Hà Nội. ',
          'phuong_an_a'=>'Quý Dương',
          'phuong_an_b'=>'Trần Tiến',
          'phuong_an_c'=>'Trung Kiên',
          'phuong_an_d'=>'Quang Thọ',
          'dap_an'=>'Quý Dương',
          'linh_vuc_id'=>'3'
        ]);
        App\cau_hoi::create([
          'noi_dung'=>'Trong nhạc phẩm "Hoa sữa" nhạc sĩ Hồng Đăng còn nhắc tới loại cây nào khác?',
          'phuong_an_a'=>'Bàng',
          'phuong_an_b'=>'Phượng',
          'phuong_an_c'=>'Phi Lao',
          'phuong_an_d'=>'Quất',
          'dap_an'=>'Phi Lao',
          'linh_vuc_id'=>'3'
        ]);
        App\cau_hoi::create([
          'noi_dung'=>'Ai đã lên ngôi Thần tượng âm nhạc Việt Nam 2010?',
          'phuong_an_a'=>'Trần Lân Nhã',
          'phuong_an_b'=>'Trần Nguyễn Uyên Linh',
          'phuong_an_c'=>'Văn Mai Hương',
          'phuong_an_d'=>'Lều Phương Anh',
          'dap_an'=>'Trần Nguyễn Uyên Linh',
          'linh_vuc_id'=>'3'
        ]);
        App\cau_hoi::create([
          'noi_dung'=>'Ca sĩ nào đạt giải thưởng của Hội đồng nghệ thuật trong cuộc thi “Sao Mai-Điểm hẹn” 2010?',
          'phuong_an_a'=>'Minh Chuyên',
          'phuong_an_b'=>'Mỹ Như',
          'phuong_an_c'=>'Lương Quyết Quang',
          'phuong_an_d'=>'Đinh Mạnh Ninh',
          'dap_an'=>'Minh Chuyên',
          'linh_vuc_id'=>'3'
        ]);
        App\cau_hoi::create([
          'noi_dung'=>'Giải thưởng Emmy là giải thưởng cao quý của thể loại giải trí nào?',
          'phuong_an_a'=>'Truyền hình',
          'phuong_an_b'=>'Điện ảnh',
          'phuong_an_c'=>'Âm nhạc',
          'phuong_an_d'=>'Thể thao',
          'dap_an'=>'Truyền hinh',
          'linh_vuc_id'=>'3'
        ]);
        App\cau_hoi::create([
          'noi_dung'=>'Bộ phim “The social Network” đạt giải gì tại lễ trao giải Quả cầu vàng lần thứ 68?',
          'phuong_an_a'=>'Phim điện ảnh tâm lý/chính kịch hay nhất',
          'phuong_an_b'=>'Phim điện ảnh hài/ca nhạc hay nhất',
          'phuong_an_c'=>'Phim truyền hình tâm lý/chính kịch hay nhất',
          'phuong_an_d'=>'Phim truyền hình hài/ca nhạc hay nhất',
          'dap_an'=>'Phim điện ảnh hài/ca nhạc hay nhất',
          'linh_vuc_id'=>'3'
        ]);
        App\cau_hoi::create([
          'noi_dung'=>'Bộ phim "W"của đạo diễn Oliver Stone viết về ai?',
          'phuong_an_a'=>'Geroge Walker Bush ',
          'phuong_an_b'=>'Winston Churchil',
          'phuong_an_c'=>'William Shakespear',
          'phuong_an_d'=>'Walt Disney',
          'dap_an'=>'Geroge Walker Bush ',
          'linh_vuc_id'=>'3'
        ]);
        App\cau_hoi::create([
          'noi_dung'=>'“Vội vã trở về, vội vã ra đi …” là những dòng trăn trở của nhạc sĩ Phú Quang trong bài hát Hà Nội ngày trở về. Trong ca khúc này, nhạc sĩ Phú Quang đã so sánh nỗi nhớ với dòng sông nào?',
          'phuong_an_a'=>'Sông Cửu Long',
          'phuong_an_b'=>'Sông Lô',
          'phuong_an_c'=>'Sông Hồng',
          'phuong_an_d'=>'Sông Mã',
          'dap_an'=>'Sông Hồng',
          'linh_vuc_id'=>'3'
        ]);
        // Lĩnh vực địa lý id =4
        App\cau_hoi::create([
          'noi_dung'=>'Sông Bến Hải và sông Thạch Hãn nằm ở tỉnh nào?',
          'phuong_an_a'=>'Quảng Bình',
          'phuong_an_b'=>'Quảng Ninh',
          'phuong_an_c'=>'Quảng Trị',
          'phuong_an_d'=>'Quảng Ngãi',
          'dap_an'=>'Quảng Trị',
          'linh_vuc_id'=>'4'
        ]);
        App\cau_hoi::create([
          'noi_dung'=>'Trong các cây cầu sau, cầu nào là cầu xoay?',
          'phuong_an_a'=>'Cầu Thanh Trì',
          'phuong_an_b'=>'Cầu Thị Nại',
          'phuong_an_c'=>'Cầu Sông Hàn',
          'phuong_an_d'=>'Cầu Cần Thơ',
          'dap_an'=>'Cầu Sông Hàn',
          'linh_vuc_id'=>'4'
        ]);
        App\cau_hoi::create([
          'noi_dung'=>'Bùi Hữu Nghĩa, một trong bốn rồng vàng của vùng Đồng Nai xưa (tức là toàn Nam Bộ ngày nay) là tài năng ở lĩnh vực nào?',
          'phuong_an_a'=>'Họa',
          'phuong_an_b'=>'Phú',
          'phuong_an_c'=>'Đàn',
          'phuong_an_d'=>'Thi',
          'dap_an'=>'Thi',
          'linh_vuc_id'=>'4'
        ]);
        App\cau_hoi::create([
          'noi_dung'=>'Nước nào ở khu vực Đông Nam Á không có địa giới với bất kỳ nước khác?',
          'phuong_an_a'=>'Philippines',
          'phuong_an_b'=>'Malaysia',
          'phuong_an_c'=>'Lào',
          'phuong_an_d'=>'Thái Lan',
          'dap_an'=>'Philippines',
          'linh_vuc_id'=>'4'
        ]);
        App\cau_hoi::create([
          'noi_dung'=>'Thung lũng nổi tiếng ở Mỹ với ngành công nghệ thông tin được đặt tên theo nguyên tố nào?',
          'phuong_an_a'=>'Sắt',
          'phuong_an_b'=>'Silic',
          'phuong_an_c'=>'Asen',
          'phuong_an_d'=>'uran',
          'dap_an'=>'Silic',
          'linh_vuc_id'=>'4'
        ]);
        App\cau_hoi::create([
          'noi_dung'=>'Tổ chức thương mại thế giới có trụ sở đặt tại quốc gia nào ?',
          'phuong_an_a'=>'Bỉ',
          'phuong_an_b'=>'Thụy Sỹ',
          'phuong_an_c'=>'Hà Lan',
          'phuong_an_d'=>'Đức',
          'dap_an'=>'Thụy Sỹ',
          'linh_vuc_id'=>'4'
        ]);
        App\cau_hoi::create([
          'noi_dung'=>'Eo biển nào sau đây là nơi phân cách giữa châu Âu và châu Phi?',
          'phuong_an_a'=>'Bosphorus',
          'phuong_an_b'=>'Bering',
          'phuong_an_c'=>'Gibraltar',
          'phuong_an_d'=>'Malacca',
          'dap_an'=>'Gibraltar',
          'linh_vuc_id'=>'4'
        ]);
        App\cau_hoi::create([
          'noi_dung'=>'Thành phố nào của Nhật Bản bị tàn phá nặng nề nhất sau thảm hoạ động đất và sóng thần ngày 11/3/2011?',
          'phuong_an_a'=>'Sendai',
          'phuong_an_b'=>'Chiba',
          'phuong_an_c'=>'Kobe',
          'phuong_an_d'=>'Hiroshima',
          'dap_an'=>'Sendai',
          'linh_vuc_id'=>'4'
        ]);
        App\cau_hoi::create([
          'noi_dung'=>'Địa danh nào còn thiếu trong câu ca dao : ....có núi Vọng Phu/Có đầm Thị Nại có cù lao Xanh"?',
          'phuong_an_a'=>'Phú Yên',
          'phuong_an_b'=>'Khánh Hòa',
          'phuong_an_c'=>'Long An',
          'phuong_an_d'=>'Bình Định',
          'dap_an'=>'Bình Định',
          'linh_vuc_id'=>'4'
        ]);
        App\cau_hoi::create([
          'noi_dung'=>'Bối cảnh của câu chuyện tỉnh Romeo và Juliet là thành phố nào của nước Ý?',
          'phuong_an_a'=>'Venice',
          'phuong_an_b'=>'Milan',
          'phuong_an_c'=>'Rome',
          'phuong_an_d'=>'Veroma',
          'dap_an'=>'Veroma',
          'linh_vuc_id'=>'4'
        ]);
        App\cau_hoi::create([
          'noi_dung'=>'Ngân hàng trung ương châu Âu (ECB) có trụ sở đặt tại thành phố nào?',
          'phuong_an_a'=>'Brussel',
          'phuong_an_b'=>'Frankurt',
          'phuong_an_c'=>'Paris',
          'phuong_an_d'=>'Geneva',
          'dap_an'=>'Frankurt',
          'linh_vuc_id'=>'4'
        ]);
        App\cau_hoi::create([
          'noi_dung'=>'Địa danh "Cần Giuộc" trong bài "Văn Tế nghĩa Sĩ Cần Giuộc" hiện nay nằm ở tỉnh nào ? ',
          'phuong_an_a'=>'Long An',
          'phuong_an_b'=>'Tiền giang',
          'phuong_an_c'=>'An Giang',
          'phuong_an_d'=>'Cần Thơ',
          'dap_an'=>'Long An',
          'linh_vuc_id'=>'4'
        ]);
        App\cau_hoi::create([
          'noi_dung'=>'Bộ phận đất nổi, nhỏ hơn lục địa, xung quanh có biển và đại dương bao quanh gọi là gì ?',
          'phuong_an_a'=>'Đảo',
          'phuong_an_b'=>'Quần đảo',
          'phuong_an_c'=>'Hải đảo',
          'phuong_an_d'=>'Quốc đảo',
          'dap_an'=>'Đảo',
          'linh_vuc_id'=>'4'
        ]);
        App\cau_hoi::create([
          'noi_dung'=>'Cầu Phú Mỹ-cây cầu đẹp và hiện đại nhất thành phố Hồ Chí Minh có hình dáng của chữ cái nào?',
          'phuong_an_a'=>'T',
          'phuong_an_b'=>'H',
          'phuong_an_c'=>'L',
          'phuong_an_d'=>'M',
          'dap_an'=>'H',
          'linh_vuc_id'=>'4'
        ]);
        App\cau_hoi::create([
          'noi_dung'=>'Các trung tâm công nghiệp lớn như Tokyo, Kyoto, Yokohama, Nagoia, Osaka nằm trên hòn đảo nào có diện tích rộng nhất, dân số đông nhất và kinh tế phát triển nhất trong quần đảo Nhật Bản?',
          'phuong_an_a'=>'Hokkaido',
          'phuong_an_b'=>'Honsu',
          'phuong_an_c'=>'Shikoku',
          'phuong_an_d'=>'Kyusyu',
          'dap_an'=>'Hosu',
          'linh_vuc_id'=>'4'
        ]);
        App\cau_hoi::create([
          'noi_dung'=>'Quốc gia nào sau đây có chung đường biên giới cả trên đất liên và trên biển với Việt Nam?',
          'phuong_an_a'=>'Thái Lan',
          'phuong_an_b'=>'Lào',
          'phuong_an_c'=>'Trung Quốc',
          'phuong_an_d'=>'Indonesia',
          'dap_an'=>'Trung Quốc',
          'linh_vuc_id'=>'4'
        ]);
        App\cau_hoi::create([
          'noi_dung'=>'Trụ sở của Ban thư ký ASEAN được đặt tại quốc gia nào sau đây?',
          'phuong_an_a'=>'Thái Lan',
          'phuong_an_b'=>'Singapore',
          'phuong_an_c'=>'Malaysia',
          'phuong_an_d'=>'Indonesia',
          'dap_an'=>'Indonesia',
          'linh_vuc_id'=>'4'
        ]);
        App\cau_hoi::create([
          'noi_dung'=>'Vịnh nào sau đây không nằm trong CLB các vịnh biển đẹp nhất thế giới (World Bay)?',
          'phuong_an_a'=>'Vịnh Nha Trang (Khánh Hoà)',
          'phuong_an_b'=>'Vịnh Lăng Cô (Thừa Thiên Huế)',
          'phuong_an_c'=>'Vịnh Xuân Đài (Phú Yên)',
          'phuong_an_d'=>'Vịnh Hạ Long (Quảng Ninh)',
          'dap_an'=>'Vịnh Hạ Long (Quảng Ninh)',
          'linh_vuc_id'=>'4'
        ]);
        App\cau_hoi::create([
          'noi_dung'=>'Một hòn đảo của tỉnh Quảng Ngãi nơi được mệnh danh là "Vương quốc hành tỏi". Đó là đảo nào?',
          'phuong_an_a'=>'Đảo Lý Sơn',
          'phuong_an_b'=>'Đảo Cồn Cỏ',
          'phuong_an_c'=>'Đảo Thổ Chu',
          'phuong_an_d'=>'Đảo Phú Quốc',
          'dap_an'=>'Đảo Lý Sơn',
          'linh_vuc_id'=>'4'
        ]);
        App\cau_hoi::create([
          'noi_dung'=>'Châu lục nào tiếp giáp với cả Đại Tây Dương và Ấn Độ Dương?',
          'phuong_an_a'=>'Châu Á',
          'phuong_an_b'=>'Châu Phi',
          'phuong_an_c'=>'Châu Âu',
          'phuong_an_d'=>'Châu Mỹ',
          'dap_an'=>'Châu Mỹ',
          'linh_vuc_id'=>'4'
        ]);
        // Lĩnh vực văn học id =5
        App\cau_hoi::create([
          'noi_dung'=>'"Điêu tàn" là tập thơ đầu tiên của nhà thơ nào?',
          'phuong_an_a'=>'Anh Thơ',
          'phuong_an_b'=>'Thế Lữ',
          'phuong_an_c'=>'Bích Khê',
          'phuong_an_d'=>'Chế Lan Viên',
          'dap_an'=>'Chế Lan Viên',
          'linh_vuc_id'=>'5'
        ]);
        App\cau_hoi::create([
          'noi_dung'=>'Điền từ còn thiếu trong câu thành ngữ:’”…. Không cứu được …gần”.',
          'phuong_an_a'=>'Lính-Tướng',
          'phuong_an_b'=>'Chồng-Vợ',
          'phuong_an_c'=>'Nước-Lửa',
          'phuong_an_d'=>'Chó-Mèo',
          'dap_an'=>'Nước-Lửa',
          'linh_vuc_id'=>'5'
        ]);
        App\cau_hoi::create([
          'noi_dung'=>'Truyện “Vợ chồng A Phủ” trong tập truyện Tây Bắc của nhà văn Tô Hoài viết về người dân tộc nào?',
          'phuong_an_a'=>'Vân Kiều',
          'phuong_an_b'=>'Thái',
          'phuong_an_c'=>'H,Mông',
          'phuong_an_d'=>'Tày',
          'dap_an'=>'H,Mông',
          'linh_vuc_id'=>'5'
        ]);
        App\cau_hoi::create([
          'noi_dung'=>'Tác phẩm "Thuỷ hử" của Thi Nại Am diễn ra vào triều đại nào của Trung Quốc?',
          'phuong_an_a'=>'Triều Tống',
          'phuong_an_b'=>'Triều Nguyên',
          'phuong_an_c'=>'Triều Minh',
          'phuong_an_d'=>'Triều Thanh',
          'dap_an'=>'Triều Tống',
          'linh_vuc_id'=>'5'
        ]);
        App\cau_hoi::create([
          'noi_dung'=>'Truyền kỳ mạn lục, một tác phẩm được đánh giá là " thiên cổ kỳ bút", là "áng văn hay của bậc đại gia", là sáng tác của ai?',
          'phuong_an_a'=>'Nguyễn Trãi',
          'phuong_an_b'=>'Nguyễn Bỉnh Khiêm',
          'phuong_an_c'=>'Nguyễn Dữ',
          'phuong_an_d'=>'Nguyễn Du',
          'dap_an'=>'Nguyễn Dữ',
          'linh_vuc_id'=>'5'
        ]);
        App\cau_hoi::create([
          'noi_dung'=>'Nhà thơ Chế Lan Viên (Phan Ngọc Hoan: tên thật) còn có bút danh khác mang tên dòng sông nào?',
          'phuong_an_a'=>'Nhật Lệ',
          'phuong_an_b'=>'Thạch Hãn',
          'phuong_an_c'=>'Thu Bồn',
          'phuong_an_d'=>'Bến Hải',
          'dap_an'=>'Thạch Hãn',
          'linh_vuc_id'=>'5'
        ]);
        App\cau_hoi::create([
          'noi_dung'=>'Nhà văn nào đại diện cho Việt Nam nhận Giải thưởng văn học Đông Nam Á 2010?',
          'phuong_an_a'=>'Nguyễn Nhật Ánh (Cho tôi xin một vé đi tuổi thơ)',
          'phuong_an_b'=>'Cao Duy Sơn (Ngôi nhà xưa bên suối)',
          'phuong_an_c'=>'Nguyễn Thị Ngọc Tư (Cánh đồng bất tận) ',
          'phuong_an_d'=>'Trần Văn Tuấn (Rừng thiêng nước trong)',
          'dap_an'=>'Nguyễn Nhật Ánh (Cho tôi xin một vé đi tuổi thơ)',
          'linh_vuc_id'=>'5'
        ]);
        App\cau_hoi::create([
          'noi_dung'=>'Chuyện kể đêm Noel, Dế mèn trong lò sưởi là những tác phẩm của nhà văn nào sau đây?',
          'phuong_an_a'=>'Mark Twain',
          'phuong_an_b'=>'Charles Dicken',
          'phuong_an_c'=>'Adersen',
          'phuong_an_d'=>'Jean de La Fontaine',
          'dap_an'=>'Jean de La Fontaine',
          'linh_vuc_id'=>'5'
        ]);
        App\cau_hoi::create([
          'noi_dung'=>'Có câu tục ngữ"...hết bị đòn,...còn mất vợ"? ',
          'phuong_an_a'=>'Ăn',
          'phuong_an_b'=>'Uống',
          'phuong_an_c'=>'Ở',
          'phuong_an_d'=>'Mặc',
          'dap_an'=>'Ăn',
          'linh_vuc_id'=>'5'
        ]);
        App\cau_hoi::create([
          'noi_dung'=>'Ngọn núi nào được nhắc tới trong bài thơ "Quê mẹ" của Tố Hữu?',
          'phuong_an_a'=>'Thiên Thai',
          'phuong_an_b'=>'Ngự Bình',
          'phuong_an_c'=>'Non Nước',
          'phuong_an_d'=>'Hồng Lĩnh',
          'dap_an'=>'Thiên Thai',
          'linh_vuc_id'=>'5'
        ]);
        App\cau_hoi::create([
          'noi_dung'=>'Tác phẩm “Dị hương” của nhà văn Sương Nguyệt Minh đạt giải thưởng của Hội nhà văn Việt Nam năm 2010 thuộc thể loại nào?',
          'phuong_an_a'=>'Thơ',
          'phuong_an_b'=>'Tập truyện ngắn',
          'phuong_an_c'=>'Tiểu Thuyết',
          'phuong_an_d'=>'Văn học dịch',
          'dap_an'=>'Tập truyện ngắn',
          'linh_vuc_id'=>'5'
        ]);
        // Lĩnh vực y học id= 6
        App\cau_hoi::create([
          'noi_dung'=>'Vai trò chính của vitamin nào là giúp cho quá trình đông máu diễn ra tốt và hạn chế lượng máu bị mất khi bị thương?',
          'phuong_an_a'=>'Vitamin A',
          'phuong_an_b'=>'Vitamin D',
          'phuong_an_c'=>'Vitamin E',
          'phuong_an_d'=>'Vitamin K',
          'dap_an'=>'Vitamin K',
          'linh_vuc_id'=>'6'
        ]);
        App\cau_hoi::create([
          'noi_dung'=>'Cúm và sởi là những bệnh lây truyền qua đường nào?',
          'phuong_an_a'=>'Tiêu hóa',
          'phuong_an_b'=>'Hô hấp',
          'phuong_an_c'=>'Sinh dục',
          'phuong_an_d'=>'Máu',
          'dap_an'=>'Hô hấp',
          'linh_vuc_id'=>'6'
        ]);
        App\cau_hoi::create([
          'noi_dung'=>'Virus sởi lây truyền qua đường nào?',
          'phuong_an_a'=>'Tiêu hóa',
          'phuong_an_b'=>'Hô hấp',
          'phuong_an_c'=>'Máu',
          'phuong_an_d'=>'Sinh dục',
          'dap_an'=>'Hô hấp',
          'linh_vuc_id'=>'6'
        ]);
        App\cau_hoi::create([
          'noi_dung'=>'Phổi, họng, thanh quản, khí quản, phế quản, phổi là những cơ quan thuộc hệ cơ quan nào trong cơ thể người?',
          'phuong_an_a'=>'Hệ tuần hoàn',
          'phuong_an_b'=>'Hệ sinh dục',
          'phuong_an_c'=>'Hệ hô hấp',
          'phuong_an_d'=>'Hệ thần kinh',
          'dap_an'=>'Hệ hô hấp',
          'linh_vuc_id'=>'6'
        ]);
        App\cau_hoi::create([
          'noi_dung'=>'Loại vitamin nào mà cơ thể con người có thể tự tổng hợp được nhờ ánh sáng Mặt Trời?',
          'phuong_an_a'=>'Vitamin A',
          'phuong_an_b'=>'Vitamin D',
          'phuong_an_c'=>'Vitamin E',
          'phuong_an_d'=>'Vitamin K',
          'dap_an'=>'Vitamin D',
          'linh_vuc_id'=>'6'
        ]);
        App\cau_hoi::create([
          'noi_dung'=>'Paracetamol thuộc nhóm thuốc nào sau đây?',
          'phuong_an_a'=>'Thuốc lợi tiểu',
          'phuong_an_b'=>'Thuốc hạ sốt, giảm đau, chống viêm',
          'phuong_an_c'=>'Thuốc điều trị tăng huyết áp',
          'phuong_an_d'=>'Thuốc an thần, bình thân',
          'dap_an'=>'Thuốc hạ sốt, giảm đau, chống viêm',
          'linh_vuc_id'=>'6'
        ]);
        App\cau_hoi::create([
          'noi_dung'=>'Từ nào sau đây chỉ tế bào máu?',
          'phuong_an_a'=>'Huyết đồ',
          'phuong_an_b'=>'Huyết tương',
          'phuong_an_c'=>'Huyết thanh',
          'phuong_an_d'=>'Huyết cầu',
          'dap_an'=>'Huyết cầu',
          'linh_vuc_id'=>'6'
        ]);
        App\cau_hoi::create([
          'noi_dung'=>'Đâu không phải là một loại tế bào máu?',
          'phuong_an_a'=>'Khúc côn cầu',
          'phuong_an_b'=>'Hồng cầu',
          'phuong_an_c'=>'Tiểu cầu',
          'phuong_an_d'=>'Bạch cầu ',
          'dap_an'=>'Khúc côn cầu',
          'linh_vuc_id'=>'6'
        ]);
        App\cau_hoi::create([
          'noi_dung'=>'Bệnh nào sau đây không phải bệnh truyền nhiễm?',
          'phuong_an_a'=>'Sởi',
          'phuong_an_b'=>'Quai bị',
          'phuong_an_c'=>'Đậu mùa',
          'phuong_an_d'=>'Tiểu đường',
          'dap_an'=>'Tiểu đường',
          'linh_vuc_id'=>'6'
        ]);

        // Lĩnh vực văn hóa sự kiện id= 7
        App\cau_hoi::create([
          'noi_dung'=>': Sự kiện giờ Trái Đất, sáng kiến của WWF được tổ chức lần đầu tiên vào năm 2007 tại thành phố nào?',
          'phuong_an_a'=>'Sydney',
          'phuong_an_b'=>'tokyo',
          'phuong_an_c'=>'Bắc kinh',
          'phuong_an_d'=>'Singapore',
          'dap_an'=>'Sydney',
          'linh_vuc_id'=>'7'
        ]);
        App\cau_hoi::create([
          'noi_dung'=>'Phú Yên-tỉnh đăng cai Năm du lịch quốc gia 2011 ở khu vực nào?',
          'phuong_an_a'=>'Nam Trung Bộ',
          'phuong_an_b'=>'Tây Nguyên',
          'phuong_an_c'=>'Đông Bắc Bộ',
          'phuong_an_d'=>'Tây Nam Bộ',
          'dap_an'=>'Nam Trung Bộ',
          'linh_vuc_id'=>'7'
        ]);
        App\cau_hoi::create([
          'noi_dung'=>'Lễ Hội Gióng chính thức được nhận bằng Di sản văn hoá thế giới vào năm nào?',
          'phuong_an_a'=>'2008',
          'phuong_an_b'=>'2009',
          'phuong_an_c'=>'2010',
          'phuong_an_d'=>'2011',
          'dap_an'=>'2010',
          'linh_vuc_id'=>'7'
        ]);
        App\cau_hoi::create([
          'noi_dung'=>'Việt Nam đã đăng cai cuộc thi sắc đẹp nào trong năm 2010?',
          'phuong_an_a'=>'Hoa hậu thế giới',
          'phuong_an_b'=>'Hoa hậu Trái Đất',
          'phuong_an_c'=>'Hoa hậu hoàn vũ',
          'phuong_an_d'=>'Hoa hậu quốc tế',
          'dap_an'=>'Hoa hậu thế giới',
          'linh_vuc_id'=>'7'
        ]);
        App\cau_hoi::create([
          'noi_dung'=>'Loài hoa nào được chọn là Quốc hoa của Việt Nam?',
          'phuong_an_a'=>'Hoa sen',
          'phuong_an_b'=>'Hoa mai',
          'phuong_an_c'=>'Hoa đào',
          'phuong_an_d'=>'Hoa hồng',
          'dap_an'=>'Hoa sen',
          'linh_vuc_id'=>'7'
        ]);
        App\cau_hoi::create([
          'noi_dung'=>'Bánh pía là đặc sản có nguồn gốc từ tỉnh nào?',
          'phuong_an_a'=>'Bến Tre',
          'phuong_an_b'=>'Sóc Trăng',
          'phuong_an_c'=>'Bạc Liêu',
          'phuong_an_d'=>'Hậu Giang',
          'dap_an'=>'Sóc Trăng',
          'linh_vuc_id'=>'7'
        ]);
        // Lĩnh vực khoa họcc tự nhiên id =8
        App\cau_hoi::create([
          'noi_dung'=>'Trong các hàm số lượng giác cơ bản, hàm số nào là hàm số chẵn?',
          'phuong_an_a'=>'y=sinx',
          'phuong_an_b'=>'y=cosx',
          'phuong_an_c'=>'y-cotgx',
          'phuong_an_d'=>'y=tgx',
          'dap_an'=>'y=tgx',
          'linh_vuc_id'=>'8'
        ]);
        App\cau_hoi::create([
          'noi_dung'=>'Tập hợp các số thực được ký hiệu bằng chữ cái nào?',
          'phuong_an_a'=>'N (Số tự nhiên)',
          'phuong_an_b'=>'Z (Số nguyên)',
          'phuong_an_c'=>'Q (Số hữu tỷ)',
          'phuong_an_d'=>'R (Số thực)',
          'dap_an'=>'N (Số tự nhiên)',
          'linh_vuc_id'=>'8'
        ]);
        App\cau_hoi::create([
          'noi_dung'=>'Khí nào chiếm 80% thành phần không khí?',
          'phuong_an_a'=>'N2',
          'phuong_an_b'=>'O2',
          'phuong_an_c'=>'H2',
          'phuong_an_d'=>'Cl2',
          'dap_an'=>'N2',
          'linh_vuc_id'=>'8'
        ]);
        App\cau_hoi::create([
          'noi_dung'=>'Vận tốc của sóng âm truyền trong môi trường nào lớn nhất?',
          'phuong_an_a'=>'Chân không ',
          'phuong_an_b'=>'Chất khí',
          'phuong_an_c'=>'Chất rắn',
          'phuong_an_d'=>'Chất lỏng',
          'dap_an'=>'Chất rắn',
          'linh_vuc_id'=>'8'
        ]);
        App\cau_hoi::create([
          'noi_dung'=>'Côn trùng (sâu bọ) là lớp động vật thuộc ngành động vật nào?',
          'phuong_an_a'=>'Động vật nguyên sinh',
          'phuong_an_b'=>'Ruột khoang',
          'phuong_an_c'=>'Thân mềm',
          'phuong_an_d'=>'Chân khớp',
          'dap_an'=>'Chân khớp',
          'linh_vuc_id'=>'8'
        ]);
        App\cau_hoi::create([
          'noi_dung'=>'Công thức hoá học của Oxi già là gì ? ',
          'phuong_an_a'=>'O2',
          'phuong_an_b'=>'O3',
          'phuong_an_c'=>'H20',
          'phuong_an_d'=>'H202',
          'dap_an'=>'H2O2',
          'linh_vuc_id'=>'8'
        ]);
        App\cau_hoi::create([
          'noi_dung'=>'Khí độc Sarin có chứa thành phần nguyên tố Halogen nào?',
          'phuong_an_a'=>'Flo',
          'phuong_an_b'=>'Clo',
          'phuong_an_c'=>'Brom',
          'phuong_an_d'=>'Iot',
          'dap_an'=>'Flo',
          'linh_vuc_id'=>'8'
        ]);
        App\cau_hoi::create([
          'noi_dung'=>'Đơn phân của protein là ',
          'phuong_an_a'=>'Glucose',
          'phuong_an_b'=>'Axit amin',
          'phuong_an_c'=>'Axit béo',
          'phuong_an_d'=>'Nuclêotit',
          'dap_an'=>'Axit amin',
          'linh_vuc_id'=>'8'
        ]);
        App\cau_hoi::create([
          'noi_dung'=>'Ure là loại phân nào?',
          'phuong_an_a'=>'Phân đạm',
          'phuong_an_b'=>'Phân lân',
          'phuong_an_c'=>'Phân kali',
          'phuong_an_d'=>'Phân NPK',
          'dap_an'=>'Phân đạm',
          'linh_vuc_id'=>'8'
        ]);
    }
}
