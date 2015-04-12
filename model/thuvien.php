<?php
//Khai báo đối tượng LIB
class LIB
{
	//Thuộc tính pdo: chứa tham chiếu đối tượng PDO khi khởi tạo
	public $pdo,$config;
	//$config: thuộc tính chứa thông tin cấu hình website: lấy luôn từ contruct 
	//Phương thức __construct: tự động chạy khi đối tượng đc khởi tạo: chạy lệnh khởi tạo đối tượng PDO -> kết nối CSDL	
	//Đối số: mảng chứa các thông tin kết nối CSDL
	function __construct($cf)
	{
		try{
			//Code trong phần try chạy: khi gặp lỗi (logic)
			//Khởi tạo đối tượng PDO: giá trị trả về sẽ gán vào thuộc tính pdo
			//mysql:host=localhost;dbname=php0613e;charset=utf8
			$dsn=$cf['server'].':host='.$cf['host'].';dbname='.$cf['db'].';charset=utf8';
			$user=$cf['user'];
			$pass=$cf['pass'];
			$this->pdo= new PDO($dsn,$user,$pass);
			$this->config=$cf;//Lấy luôn biến cấu hình truyền vào và gán cho thuộc tính config
		}catch(PDOException $e)
		{
			//Code này chỉ chạy khi có lỗi xảy ra ở phần try
			//PDOException: bắt lỗi trong PDO
			//die: chạy và in ra lỗi mà catch đang bắt giữ
			//chú ý: khi die chạy thì toàn bộ chương trình sẽ dừng lại
			die($e->getMessage());
		}
	}
	
	//Khai báo 1 số Phương thức và thuộc tính phục vụ ví dụ phân trang
	private $num;//Tổng số trang tính đc dựa vào tống số dữ liệu và số dữ liệu trên 1 trang
	//Phương thức: selectall: chạy câu lệnh SQL và trả về giá trị dạng mảng 2 chiều chưa toàn bộ dữ liệu
	//Đối số: câu truy vấn SQL, Phân trang hay ko (dành cho trường hợp ko có ý định phân trang)
	//Giá trị trả về: mảng 2 chiều
	public function selectall($query,$pt=true,$page='page')
	{
		$re=$this->pdo->query($query);//Chay câu lệnh SQL
		if(!$re)die('Error: '.$query);//nếu câu truy vấn sai thì in ra SQL
		if($pt==true){//Có phân trang thì...
			$this->num=ceil($re->rowCount()/$this->config[$page]);//rowCount: PT trả về tổng số phần tử
			if(isset($_GET['n']))$n=$_GET['n'];else $n=1;//lấy trang hiện tại trên URL
			if($n>$this->num)$n=$this->num;//Trang hiện tại vượt quá tổng số trang
			if($n<1)$n=1;//Nếu trang hiện tại mà nhỏ hơn 1
			$thutu=($n-1)*$this->config[$page];//Công thức tính thứ tự
			$query.=" LIMIT $thutu , ".$this->config[$page];//Nối thêm LIMIT cho câu lệnh
			$re=$this->pdo->query($query);//Chay câu lệnh SQL
			if(!$re)die('Error: '.$query);//nếu câu truy vấn sai thì in ra SQL
		}
		return $re->fetchAll();//Trả về mảng 2 chiều		
	}
	//Phuong thức viewpage: PT hiển thi link phân trang
	//Phương thức này có lệnh echo trực tiếp nên PT này sẽ đc gọi ở tầng VIEW
	//Đối số: Đường dẫn phân trang 
	//Hiển thị trang: hiển thị 9 trang: xác định bởi trang hiện tại người dùng đang xem
	public function viewpage($link)
	{
		//Lấy TRang hiện tại về
		if(isset($_GET['n']))$n=$_GET['n']; else $n=1;//Mặc định trang 1
		if($n>$this->num)$n=$this->num;//Nếu trang hiện tại lớn hơn tổng số trang  thì trang hiện tại= trang cuối
		if($n<1)$n=1;//Nếu trang hiện tại mà nhỏ hơn 1 thì trang hiện tại hiển trị trang đầu
		//Xây dựng lệnh tính toán hiển thị giới hạn số lượng trang
		$begin=$n-4;//Trang bắt đầu mặc định là trang hiện tại trừ đi 4 đơn vị
		$end=$n+4;//Trang kết thúc mặc định là trang hiện tại cộng thêm 4 đơn vị
		//Kiểm tra giá trị $begin và $end
		if($begin<1){
			$begin=1;//Nếu điểm bắt đầu mà nhỏ hơn 1 thì cho điểm bắt đầu bằng 1
			$end=$begin+8;}
		if($end>$this->num){
			$end=$this->num;
			$begin=$end-8;}
		if($begin<1)$begin=1;//Nếu điểm bắt đầu mà nhỏ hơn 1 thì cho điểm bắt đầu bằng 1
		echo '<a href="'.$link.'1">Đầu</a> ';
		$sau=$n-1;
		if($n>1)echo '<a href="'.$link.$sau.'">Trước</a> ';
		//Sử dụng vòng lặp để in ra danh sách trang
		for($i=$begin;$i<=$end;$i++)
		{
			if($n==$i)echo '<a href="'.$link.$i.'" class="active">'.$i.'</a> ';
			else
			echo '<a href="'.$link.$i.'">'.$i.'</a> ';
		}
		$tiep=$n+1;
		if($n<$this->num)echo '<a href="'.$link.$tiep.'">Tiếp</a> ';
		echo '<a href="'.$link.$this->num.'">Cuối</a> ';
	}
	//Phương thức tên Upload: Upload 1 file trên Form
	//Đối số: 1, tên form file, 2 thu mục sẽ upload file lên
	//Giá trị trả về: Nếu upload thành công: trả về URL (đường dẫn đến file đc upload)
		//Nếu không thì trả về lỗi
	public function upload($nameform,$dir)
	{
		//Lấy ra mảng thông tin của Form File upload
		$name=$_FILES[$nameform]['name'];//Lấy tên file
		$type=$_FILES[$nameform]['type'];//Lấy kiểu file (định dạng)
		$size=$_FILES[$nameform]['size'];//Lấy dung lượng file (byte)
		$error=$_FILES[$nameform]['error'];//Thông tin báo lỗi (0: ko có lỗi)
		$tmp=$_FILES[$nameform]['tmp_name'];//Đường dẫn tạm trên SERVER
		//Kiểm tra định dạng và dung lượng File sẽ Upload
		if(!$error){
			if($type=='image/png' || $type=='image/jpg' || $type=='image/jpeg' || $type=='image/gif')
			{
				//Kiểm tra dung lượng File Upload
				if($size<=2000*1024){
					$duongdan=$dir.$name;//Đường dẫn sẽ upload file
					if(move_uploaded_file($tmp,$duongdan))return array(true,$duongdan);				
					else return array(false,'Upload file xảy ra lỗi!');
				}else  return array(false,'Dung lượng file quá lớn!');
			}else  return array(false,'Định dạng file phải là dạng ảnh: png,jpg,gif!');
		}elseif($error==1) return array(false,'Có lỗi xảy ra khi upload file!');//Pt trả về khi có lỗi
		else return '';//PT trả về khi không upload file
	}
	//Phương thức selectone: Chạy câu lệnh SQL, trả về giá trị là mảng 1 chiều chứa dòng dữ liệu đầu tiên có đc
	//Đối số; 1 câu truy vấn SQL
	//Giá trị trả về: Mảng 1 chiều chứa thông tin của 1 dòng dữ liệu trong bảng
	public function selectone($query)
	{
		$re=$this->pdo->query($query);//Chạy câu lệnh truy vấn SQL
		if(!$re)die('Error:'.$query);//Kiểm tra câu lệnh
		return $re->fetch();//PT trả về mảng 1 chiều
	}
	
	//Phương thức antrom: Đọc đường dẫn RSS và lưu nội dung vào bảng tbtintuc, đồng thời sử dụng thư viện HTML DOM để lấy nốt phần nội dung tin tức
	//ĐỐi số: Link RSS, Thẻ nhận biết phần nội dung tin để ăn trộm
	public function antrom($linkrss,$label)
	{
		require_once('simple_html_dom.php');
		$rss= new DOMDocument();//Khởi tạo đối tượng DOm
		$rss->load($linkrss);//Đọc file RSS
		//Vòng lặp lấy ra dữ liệu từ mỗi thẻ tên là item
		foreach($rss->getElementsByTagName('item') as $item)
		{
			//Lấy Tiêu đề, tóm tắt, đường link xem chi tiết sản phẩm
			$tieude=$item->getElementsByTagName('title')->item(0)->nodeValue;//Tiêu đề
			$des=$item->getElementsByTagName('description')->item(0)->nodeValue;//Mô tả ngắn
			$link=$item->getElementsByTagName('link')->item(0)->nodeValue;//Đường link để lấy phần nội dung
			//Lấy phần tóm tắt: thực ra là lấy dữ liệu trong phần mô tả ngắn (strip_tags: hàm loại bỏ đi toàn bộ HTML có trong phần mô tả ngắn)
			$tomtat=strip_tags($des);
			//Lấy ra đường dẫn hình ảnh trong phần mô tả ngắn (nếu có)
			$img=str_get_html($des);
			$hinhanh=$img->find('img',0)->src;//Đường dẫn hình ảnh
			//Lấy ra phần nội dung của tin tức trên
			$html=file_get_html($link);
			$noidung=$html->find($label,0)->innertext;//Phần nôi dung
			//Cập nhật CSDL
			$stradd="INSERT INTO tbtintuc (tintuc_tieude, tintuc_tomtat,tintuc_hinhanh, tintuc_noidung, tintuc_date, tintuc_trangthai) VALUES (?,?,?,?,now(),1)";
			$re=$this->pdo->prepare($stradd);//Đưa vào trạng thái chờ
			$re->bindParam(1,$tieude);
			$re->bindParam(2,$tomtat);
			$re->bindParam(3,$hinhanh);
			$re->bindParam(4,$noidung);
			$re->execute();			
		}
		
	}
	//Phương thức sendmail: lập trình lệnh gửi mail thông qua thư viện PHPmailer
	//Đối số:  1: email người nhận, 2: Tên người nhận, 3: tiêu đề thư, 4: Nội dung thư
	//Giá tri trả về: Thông tin lỗi gửi mail (nếu có).
	public function sendmail($to,$name,$subject,$body)
	{
		require('class.phpmailer.php');
		$mail=new  PHPMailer;//Khởi tạo đối tượng phpmailer
		//Chia làm 2 phần cấu hình: cấu hình server mail, cấu hình nội dung thư điện tử
		$mail->IsSMTP();//Khai báo sử dụng phương thức gửi mail SMTP
		$mail->Host='smtp.gmail.com';//Khai báo server gửi mail
		$mail->Port=465;//Cổng chạy dịch vụ mail trên server mail bên trên
		$mail->SMTPAuth=true;//Bật chế độ xác thực tài khoản
		$mail->SMTPSecure='ssl';//ssl: Cơ chế bảo mật email
		$mail->Username='huynguyen2705@gmail.com';//Tên đăng nhập đã đăng ký trên gmail
		$mail->Password='Troidatoi1';//Mật khẩu của tên đăng nhập bên trên
		//Cấu hình thông tin nội dung bức thư điện tử (email)
		$mail->AddAddress($to,$name);//Thêm địa chi email người nhận
		$mail->Subject=$subject;//Tiêu đề thư điện tử
		$mail->Body=$body;//Nội dung thư điện tử
		$mail->IsHTML(true);//Cho phép nội dung thư điện tử có HTML
		$mail->CharSet='utf8';//Cho phép nội dung hiển thị tiếng việt
		$mail->AddReplyTo('lymo0501@gmail.com','LY MO');//Thêm địa chỉ nhận trả lời (reply)
		$mail->FromName='Quach Phu Thanh';//Tên của người gửi
		$mail->Send();//Gọi Phương thức gửi mail
		return $mail->ErrorInfo;//Thông tin lỗi (nếu có)		
	}
	
	//Phương thức checklogin: kiểm tra thông tin đăng nhập có hợp lệ hay ko
	//Đối số: tên đăng nhập và mật khẩu
	//Giá trị trả về: true, false
	public function checklogin($user,$pass,$admin=false)
	{
		$trangthai=1;
		//Xây dựng câu lệnh truy vấn để kiểm tra trạng thái đăng nhập của tài khoản
		if($admin==true)
		$strcheck="SELECT * FROM tbtaikhoan WHERE taikhoan_user=? AND taikhoan_pass=? AND taikhoan_trangthai=? AND taikhoan_loai=1";
		else
		$strcheck="SELECT * FROM tbtaikhoan WHERE taikhoan_user=? AND taikhoan_pass=? AND taikhoan_trangthai=? AND taikhoan_loai=0";
		//Đưa câu lệnh trên vào trạng thái chờ (prepare)
		$re=$this->pdo->prepare($strcheck);
		if(!$re) die('Error:'.$strcheck);//Kiểm tra biến $re
		//Truyền lần lượt các tham số cho câu truy vấn SQL
		$re->bindParam(1,$user);
		$re->bindParam(2,$pass);
		$re->bindParam(3,$trangthai);
		$re->execute();//Chạy câu lệnh
		//Kiểm tra số dòng dữ liệu trả về bởi câu truy vấn trên
		if($re->rowCount()>0)//TH: đăng nhập thành công
		{
			//khi đăng nhập thành công thì sẽ lấy ra 1 dòng dữ liệu đầu tiên tìm đc và gán cho biến session 
			if($admin==true)
			$_SESSION['adminlog']=$re->fetch();
			else
			$_SESSION['weblog']=$re->fetch();
			return true;
		}else return false;
		
	}
	
	//Phương thức shopping: Xử lý giỏ hàng: THêm, sửa, xóa sản phẩm trong mảng chứa giỏ hàng
	//3 Đối số : đối số 1: ID sản phẩm, đối số: Số lượng mua, đối số 3: kiểu update=false
	//$type=false: Update số lượng cộng thêm với số lượng truyền vào
	//$type=true: Update hoàn toàn số lượng mới truyền vào
	//KO có giá trị trả về
	public function shopping($id,$sl,$type=false)
	{
		//Nếu biến session chứa giỏ hàng chưa có-> LTV khởi tạo
		if(!isset($_SESSION['giohang']))$_SESSION['giohang']=array();
		$tim=false;//khởi tạo 1 biến giữ trạng thái tìm kiếm 1 sản phẩm trong vòng lặp
		$i=0;//Biến dùng để đếm thứ tự sản phẩm trong giỏ hàng
		//Sử dụng vòng lặp để duyệt mảng: kiểm trả sản phẩm đc thêm vào
		foreach($_SESSION['giohang'] as $item)
		{//$item: mỗi vòng lặp $item sẽ chứa  mảng thông tin của 1 sản phẩm (ID,SL)
			if($id==$item[0]){//Kiểm tra ID đầu vào có trong giỏ hàng hay ko
				$tim=true;//Nếu có sản phẩm thì đưa trạng thái tìm thấy thành true
				//Kiểm tra biến số lượng $sl: để biết cần phải sửa sản phẩm hay xóa sản phẩm
				if(is_numeric($sl) && $sl>0){//Kiểm tra số lượng phải là 1 số, số lượng phải lớn hơn 0
					if($type)$sp=array($id,$sl);//Update hoàn toàn số lượng mới
					else $sp=array($id,$item[1]+$sl);//Cộng thêm số lượng mới
					$_SESSION['giohang'][$i]=$sp;//Cập nhật sản phẩm vào vị trí cũ trong giỏ hàng
				}else{//Trường hợp xóa sản phẩm khỏi giỏ hàng
					unset($_SESSION['giohang'][$i]);
					//Sắp xếp lại mảng khi có phần tử bị loại bỏ
					$_SESSION['giohang']=array_slice($_SESSION['giohang'],0,count($_SESSION['giohang']));
				}
				break;//THoát khỏi vòng lặp ngay khi tìm thấy
			}
			$i++;			
		}//Kết thúc của vòng lặp
		if(!$tim){//Nếu ko tìm thấy sản phẩm thì thêm sản phẩm vào giỏ hàng
			$sp=array($id,$sl);//Khởi tạ biến mảng chứa thông tin sản phẩm
			array_push($_SESSION['giohang'],$sp);//Thêm vào mảng giỏ hàng 1 sản phẩm mới
		}
		
	}
	//Phương thức maketitle: loại bỏ các ký hiệu đặc biệt trên URL
	//ĐỐi số: Đoạn chuỗi sẽ đưa lên url
	//Giá trị trả về: ĐOạn chuỗi đã loại bỏ các ký hiệu đặc biệt
	public function maketitle($str)
	{
		$str=trim($str);//trim: Hàm loại bỏ khoảng trắng đầu, cuối 1 chuỗi
		$str=str_replace(' ','-',$str);//Hàm thay thế 1 chuỗi này bằng chuỗi khác trong chuỗi $str
		$str=strtolower($str);//Hàm chuyển chuỗi từ chữ hoa về chữ thường
		$str=str_replace('đ','d',$str);
		$str=preg_replace("/(â|ấ|ầ|ẩ|ậ|ẫ|ă|ắ|ằ|ẳ|ặ|ẵ|á|à|ả|ạ|ã)/",'a',$str);//Hàm thay thế định dạng (REG EXP) 1 chuỗi thành 1 chuỗi khác
		$str=preg_replace("/(ô|ố|ồ|ổ|ộ|ỗ|ơ|ớ|ờ|ở|ợ|ỡ|ó|ò|ỏ|ọ|õ)/",'o',$str);
		$str=preg_replace("/[^-a-z0-9]/",'',$str);
		return $str;
	}
	//Phương thức loadmenu: Lấy dữ liệu từ bảng tbdanhmuc và hiển thị dạng menu đa cấp
	//Đối số: ID của danh mục cha (mặc định bằng 0)
	public function loadmenu($parent=0)
	{
		//Lấy ra danh sách danh mục ứng với parent (id cha) đc truyền vào
		$re=$this->pdo->query("SELECT * FROM tbdanhmuc WHERE danhmuc_parent=$parent");
		if($re->rowCount()>0)
		{
			echo '<ul>';
			//Vòng lặp in ra danh sách danh mục 
			while($row=$re->fetch())
			{
				echo '<li>';
				if($parent==0)echo '<a href="#" class="img"><img  alt="" src="'.$row['danhmuc_icon'].'"  /></a>';
				echo '<a href="#" class="title">'.$row['danhmuc_tieude'].'</a>';
				$this->loadmenu($row['danhmuc_id']);
				echo '</li>';
			}
			echo '</ul>';
		}
	}
	
	
}

?>