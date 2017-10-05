<?php 
	class Page{
		//属性
		public $offset;
		public $length;
		public $next;
		public $prev;

		//方法
		function __construct($tot,$length){
			$this->length=$length;

			$page=$_GET['p']?$_GET['p']:1;
			$this->offset=($page-1)*$this->length;
			$pages=ceil($tot/$this->length);//获取页数
			$this->next=$page+1;
			if ($this->next>=$pages) {
				$this->next=$pages;
			}
			$this->prev=$page-1;
			if ($this->prev<=1) {
				$this->prev=1;
			}


			
		}
		public function show(){
			echo "<a href='index.php?p={$this->prev}' class='btn btn-primary'>上一页</a>
				<a href='index.php?p={$this->next}' class='btn btn-info'>下一页</a>";
		}
	}
 ?>