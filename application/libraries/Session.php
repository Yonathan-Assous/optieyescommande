<?php
session_start();

class CI_Session
{

    var $CI;
    var $DB;
    var $CurTime;

    function CI_Session()
    {
        $this->CI =& get_instance();
        $this->CurTime = time();
        if (isset($_SESSION['flash_time'])) {
            $this->LastTime = $_SESSION['flash_time'];
        } else {
            $this->LastTime = 0;
        }
        $_SESSION['flash_time'] = $this->CurTime;
    }

    function set_userdata($name, $value = NULL)
    {
        if( ! is_array($name)) {
            if($value === NULL) {
                show_error("Second parameter for set_userdata missing.");
            } else {
                if(isset($_SESSION[$name])) {
                    unset($_SESSION[$name]);
                }
                $_SESSION[$name] = $value;
            }
        } else {
            foreach($name as $names => $key) {
                if(isset($_SESSION[$names])) {
                    unset($_SESSION[$names]);
                }
                $_SESSION[$names] = $key;
            }
        }
    }

    function userdata($item = NULL, $string = NULL) {
        if($item==NULL){
            return $_SESSION;
        } else if( ! $string === NULL) {
            if(!isset($_SESSION[$item])) {
                return FALSE;
            } else {
                return TRUE;
            }
        } else {
            if(!isset($_SESSION[$item])) {
                return FALSE;
            } else {
                return $_SESSION[$item];
            }
        }
    }

    function unset_userdata($userdata) {
        if(!is_array($userdata)) {
            unset($_SESSION[$userdata]);
        } else {
            foreach($userdata as $item)
            {
                unset($_SESSION[$item]);
            }
        }
    }

    function sess_destroy() {
        session_destroy();
        session_start();
        $_SESSION['flash_time'] = $this->CurTime;
    }

    function set_flashdata($item, $value=NULL) {
        if (is_array($item)) {
            foreach($item as $key=>$val) {
                $session = array(
                    'flash_'.$key=>array(
                        'data'=>$val,
                        'set'=>$this->CurTime
                    )
                );
                $this->set_userdata($session);

            }
        } else {
            $session = array(
                'flash_'.$item=>array(
                    'data'=>$value,
                    'set'=>$this->CurTime
                )
            );
            $this->set_userdata($session);
        }
    }

    function flashdata($item) {
        $session = $this->userdata('flash_'.$item);
        if ($session['set']>=$this->LastTime) {
            return $session['data'];
        } else {
            return false;
        }
    }//flashdata

    function keep_flashdata($item)
    {
        if ($this->flashdata('flash_'.$item, true))
        {
            $_SESSION['flash_'.$item]['set'] = $this->CurTime;
        }//if

    }//keep_flashdata

    function all_userdata()
    {
        return $_SESSION;
    }

}