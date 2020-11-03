<?php 
    class m_calendar extends CI_Model{	
        public $prefs;
        public function __construct()
        {
            //parent::Model();
            $this->prefs = array(
                'start_day'    => 'monday',
                'month_type'   => 'long',
                'day_type'     => 'short',
                'show_next_prev' => TRUE,
                'next_prev_url'   => base_url().'mentor/schedule/'
            );
            $this->prefs['template'] = '

            {table_open}<table border="0" cellpadding="0" cellspacing="0" style="width: 70%;height: 80%;">{/table_open}

            {heading_row_start}<tr>{/heading_row_start}

            {heading_previous_cell}<th><a href="{previous_url}" style="float:right;">&lt;&lt;</a></th>{/heading_previous_cell}
            {heading_title_cell}<th colspan="{colspan}" style="text-align:center;">{heading}</th>{/heading_title_cell}
            {heading_next_cell}<th><a href="{next_url}" style="float:left;">&gt;&gt;</a></th>{/heading_next_cell}

            {heading_row_end}</tr>{/heading_row_end}

            {week_row_start}<tr>{/week_row_start}
            {week_day_cell}<td>{week_day}</td>{/week_day_cell}
            {week_row_end}</tr>{/week_row_end}

            {cal_row_start}<tr>{/cal_row_start}
            {cal_cell_start}<td>{/cal_cell_start}
            {cal_cell_start_today}<td>{/cal_cell_start_today}
            {cal_cell_start_other}<td class="other-month">{/cal_cell_start_other}

            {cal_cell_content}<a href="{content}">{day}</a>{/cal_cell_content}
            {cal_cell_content_today}<div class="highlight"><a href="{content}">{day}</a></div>{/cal_cell_content_today}

            {cal_cell_no_content}{day}{/cal_cell_no_content}
            {cal_cell_no_content_today}<div class="highlight">{day}</div>{/cal_cell_no_content_today}

            {cal_cell_blank}&nbsp;{/cal_cell_blank}

            {cal_cell_other}{day}{/cal_cel_other}

            {cal_cell_end}</td>{/cal_cell_end}
            {cal_cell_end_today}</td>{/cal_cell_end_today}
            {cal_cell_end_other}</td>{/cal_cell_end_other}
            {cal_row_end}</tr>{/cal_row_end}

            {table_close}</table>{/table_close}
    ';
        }
        
        public function get_calender_data($year , $month)
        {
            $query =  $this->db->select('date,content')->from('calendar')->like('date',"$year-$month",'after')->get();
            //echo $this->db->last_query();exit;
            $cal_data = array();
            foreach ($query->result() as $row) {
                        $calendar_date = date("Y-m-j", strtotime($row->date)); // to remove leading zero from day format
            $cal_data[substr($calendar_date, 8,2)] = $row->content;
            }
            
            return $cal_data;
        }

        public function getcalendar($year , $month)
        {
            $this->load->library('calendar',$this->prefs); // Load calender library
            $data = array(
            3  => 'check',
            7  => 'check1',
            13 => 'bar',
            26 => 'ytr'
            );
             $data = $this->get_calender_data($year,$month);
            // var_dump($data);
            return $this->calendar->generate($year , $month , $data);
        }
    }
