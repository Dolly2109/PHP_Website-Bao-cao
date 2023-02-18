
<?php
    class Paginator{
        var $base_url = "";
        var $total_rows = 0;
        var $per_page = 10;
        var $cur_page = 0;

        public function __construct($params = array()){  
                $this->init($params);
            }

        public function init($params = array()){
            if(count($params)>0){
                foreach($params as $key => $val){
                    if(isset($this->$key)){
                        $this->$key = $val;
                    }
                }
            }
            return $this->total_rows;
        }

        public function createLinks(){
            $end = ceil($this->total_rows / $this->per_page);
            $start = 1;
            $html = "<nav aria-label='Page navigation example'>";
            $html .="<ul class='pagination'>";

            $class = ($this->cur_page == 1 ) ? "disabled" : "";

            $html .= "<li class='page-item'><a aria-label='Previous' class = 'class='page-item''". 
                $class . "' href'" .$this->base_url . ($this->cur_page - 1)
                . "'><span aria-hidden='true'>&laquo;</span></a></li>";

            for ($i = $start ; $i <= $end; $i++){
                $class = ($this->cur_page = $i ) ? " active" : "";
                $html .= "<li class='page-item'><a class = 'class='page-item''" .$class. "' href = '" . 
                $this->base_url . $i . "'>".$i."</a></li>";
            }

            $class = ($this->cur_page == $end) ? "disabled" : "";

            $html .= "<li class='page-item'><a aria-label='Next' class = 'page-item'" .$class. "' href = '"
                .$this->base_url . ($this->cur_page + 1) . "'><span aria-hidden=
                'true'>&raquo;</span></a></li>"; 
            
            $html .= "</ul>";
            $html .= "</nav>";
            return $html;
        }
      }
?>
</body>
</html>
