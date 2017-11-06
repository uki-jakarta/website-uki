<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	 public function __construct()
     {
         parent::__construct();
		 $this->load->library('session');
         $this->load->model('m_PageElements','PE');
         $this->load->model('m_Events','EVENT');
         $this->load->model('m_News','NEWS');
         $this->load->model('m_Articles', 'ARTICLE');
         $this->load->model('m_Informations', 'INFORMATION');
		 
     }

	public function index()
	{
        $carousel = $this->PE->get_element('carousel');
        $pengumuman = $this->PE->get_element('pengumuman');
        $pojokrektor = $this->PE->get_element('pojok_rektor');
        $testimoni = $this->PE->get_element('testimoni');
        $isiPengumuman = json_decode($pengumuman['isi']);
        $isiPojokRektor = json_decode($pojokrektor['isi']);
        $isiTestimoni = json_decode($testimoni['isi']);

        //news
        $dataBerita = $this->NEWS->get_recent_news(5);   
        foreach ($dataBerita as $k => $v) {
            foreach ($v['berita_var'] as $vk => $vv) {
				$dataBerita[$k][$vv['var_nama']] = $vv['var_value'];
				$dataBerita[$k][$vv['var_nama'].'_id'] = $vv['var_id'];
            }
            unset($dataBerita[$k]['berita_var']);
        }
        
        //event
        $dataEvent = $this->EVENT->get_upcoming_events(5);   
        foreach ($dataEvent as $k => $v) {
            foreach ($v['event_var'] as $vk => $vv) {
				$dataEvent[$k][$vv['var_nama']] = $vv['var_value'];
				$dataEvent[$k][$vv['var_nama'].'_id'] = $vv['var_id'];
            }
            unset($dataEvent[$k]['event_var']);
        }

        //Artikel
        $dataArtikel = $this->ARTICLE->get_recent_articles(5);   
        foreach ($dataArtikel as $k => $v) {
            foreach ($v['artikel_var'] as $vk => $vv) {
				$dataArtikel[$k][$vv['var_nama']] = $vv['var_value'];
				$dataArtikel[$k][$vv['var_nama'].'_id'] = $vv['var_id'];
            }
            unset($dataArtikel[$k]['artikel_var']);
        }

        $dataInformasi = $this->INFORMATION->get_recent_informations(10);
        foreach ($dataInformasi as $k => $v) {
            foreach ($v['informasi_var'] as $vk => $vv) {
				$dataInformasi[$k][$vv['var_nama']] = $vv['var_value'];
				$dataInformasi[$k][$vv['var_nama'].'_id'] = $vv['var_id'];
            }
            unset($dataInformasi[$k]['informasi_var']);
        }

        $additionalJS = '<script type="text/javascript">
                            $(document).ready(function () {
                                var hideTweetMedia = function () {
                                    $(".twitter").find(".twitter-timeline").contents().find(".timeline-Tweet-media").css("display", "none");
                                    $(".twitter").find(".twitter-timeline").contents().find(".timeline-Tweet-text .timeline-Tweet-author").css("font-family", "Roboto");
                                    $(".twitter").find(".twitter-timeline").contents().find(".timeline-Tweet-author").css("color", "rgba(0, 0, 102, 1)");
                                    $(".twitter").find(".twitter-timeline").contents().find(".timeline-Tweet-text").css("font-size", "10pt");
                                    $(".twitter").find(".twitter-timeline").contents().find(".timeline-Tweet-text").css("line-height", "1");
                                    //$("#twitter-widget-0").css("height", "100%");
                                    $(".twitter").find(".twitter-timeline").contents().find(".timeline-TweetList").bind("DOMSubtreeModifiedpropertychange", function () {
                                        hideTweetMedia(this);
                                    }
                                    );
                                };
                                $(".twitter").delegate("#twitter-widget-0", "DOMSubtreeModified propertychange", function () {
                                    hideTweetMedia();
                                });
                            });
                        </script>';

        $data = array(
            'carousel' => json_decode($carousel['isi']),
            'pengumuman' => $isiPengumuman,
            'pojokrektor' => $isiPojokRektor,
            'testimoni' => $isiTestimoni,
            'berita' => $dataBerita,
            'artikel' => $dataArtikel,
            'informasi' => $dataInformasi,
            'event' => $dataEvent
        );
        $add = array (
            'additionalJS' => $additionalJS
        );

        $this->load->view('v_Start', $add);
        $this->load->view('v_Home', $data);
        $this->load->view('v_End');
	}
}
