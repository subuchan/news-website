<?php 
class Admin_Model extends CI_Model{

    public function check_admin($username,$password) {
        $this->load->database();
        $result = $this->db->get_where('admin_table',array('username'=>$username,'password'=>$password));
        return $result->row_array();
    }
    public function trend_table ($data) {
      $this->load->database();
     return $this->db->insert('trending_table',$data);
    }
    public function get_trend() {
        $this->load->database();
        return $this->db->get('trending_table')->result();

    }
    public function trending_desc($id) {
        $this->load->database();
        $this->db->where('id',$id);
       return $this->db->get('trending_table')->result();
    }
    public function editing_trend($id) {
        $this->load->database();
        $this->db->where('id',$id);
       return $this->db->get('trending_table')->result();
    }
    public function update_trend($data, $edit_id) {
        $this->load->database();
        $this->db->where('id',$edit_id);
       return $this->db->update('trending_table',$data);
    }
    public function delete_trend($id) {
        $this->load->database();
        $this->db->where('id',$id);
       return $this->db->delete('trending_table');
    }

    // home table 
    public function home_table($data) {
        $this->load->database();
        return $this->db->insert('home_table',$data);
    }
    public function get_home() {
        $this->load->database();
        return $this->db->get('home_table')->result();

    }
    public function home_desc($id) {
        $this->load->database();
        $this->db->where('id',$id);
       return $this->db->get('home_table')->result();
    }
    public function editing_home($id) {
        $this->load->database();
        $this->db->where('id',$id);
       return $this->db->get('home_table')->result();
    }
    public function update_home($data, $edit_id) {
        $this->load->database();
        $this->db->where('id',$edit_id);
       return $this->db->update('home_table',$data);
    }
    public function delete_home($id) {
        $this->load->database();
        $this->db->where('id',$id);
       return $this->db->delete('home_table');
    }

    // news table
    public function news_table($data) {
        $this->load->database();
        return $this->db->insert('news_table',$data);
    }
    public function get_news() {
        $this->load->database();
        return $this->db->get('news_table')->result();

    }
    public function news_desc($id) {
        $this->load->database();
        $this->db->where('id',$id);
       return $this->db->get('news_table')->result();
    }
    public function editing_news($id) {
        $this->load->database();
        $this->db->where('id',$id);
       return $this->db->get('news_table')->result();
    }
    public function update_news($data, $edit_id) {
        $this->load->database();
        $this->db->where('id',$edit_id);
       return $this->db->update('news_table',$data);
    }
    public function delete_news($id) {
        $this->load->database();
        $this->db->where('id',$id);
       return $this->db->delete('news_table');
    }

    // sports table
    public function sports_table($data) {
        $this->load->database();
        return $this->db->insert('sports_table',$data);
    }
    public function get_sports() {
        $this->load->database();
        return $this->db->get('sports_table')->result();

    }
    public function sports_desc($id) {
        $this->load->database();
        $this->db->where('id',$id);
       return $this->db->get('sports_table')->result();
    }
    public function editing_sports($id) {
        $this->load->database();
        $this->db->where('id',$id);
       return $this->db->get('sports_table')->result();
    }
    public function update_sports($data, $edit_id) {
        $this->load->database();
        $this->db->where('id',$edit_id);
       return $this->db->update('sports_table',$data);
    }
    public function delete_sports($id) {
        $this->load->database();
        $this->db->where('id',$id);
       return $this->db->delete('sports_table');
    }






    // 
    public function tvshows_table($data) {
        $this->load->database();
        return $this->db->insert('tvshows_table',$data);
    }
    public function get_tvshows() {
        $this->load->database();
        return $this->db->get('tvshows_table')->result();

    }
    public function tvshows_desc($id) {
        $this->load->database();
        $this->db->where('id',$id);
       return $this->db->get('tvshows_table')->result();
    }
    public function editing_tvshows($id) {
        $this->load->database();
        $this->db->where('id',$id);
       return $this->db->get('tvshows_table')->result();
    }
    public function update_tvshows($data, $edit_id) {
        $this->load->database();
        $this->db->where('id',$edit_id);
       return $this->db->update('tvshows_table',$data);
    }
    public function delete_tvshows($id) {
        $this->load->database();
        $this->db->where('id',$id);
       return $this->db->delete('tvshows_table');
    }
    // 
    public function tvserials_table($data) {
        $this->load->database();
        return $this->db->insert('tvserials_table',$data);
    }
    public function get_tvserials() {
        $this->load->database();
        return $this->db->get('tvserials_table')->result();

    }
    public function tvserials_desc($id) {
        $this->load->database();
        $this->db->where('id',$id);
       return $this->db->get('tvserials_table')->result();
    }
    public function editing_tvserials($id) {
        $this->load->database();
        $this->db->where('id',$id);
       return $this->db->get('tvserials_table')->result();
    }
    public function update_tvserials($data, $edit_id) {
        $this->load->database();
        $this->db->where('id',$edit_id);
       return $this->db->update('tvserials_table',$data);
    }
    public function delete_tvserials($id) {
        $this->load->database();
        $this->db->where('id',$id);
       return $this->db->delete('tvserials_table');
    }
    // 
    public function tamil_reviews_table($data) {
        $this->load->database();
        return $this->db->insert('tamil_table',$data);
    }
    public function get_tamil() {
        $this->load->database();
        return $this->db->get('tamil_table')->result();

    }
    public function tamil_desc($id) {
        $this->load->database();
        $this->db->where('id',$id);
       return $this->db->get('tamil_table')->result();
    }
    public function editing_tamil($id) {
        $this->load->database();
        $this->db->where('id',$id);
       return $this->db->get('tamil_table')->result();
    }
    public function update_tamil($data, $edit_id) {
        $this->load->database();
        $this->db->where('id',$edit_id);
       return $this->db->update('tamil_table',$data);
    }
    public function delete_tamil($id) {
        $this->load->database();
        $this->db->where('id',$id);
       return $this->db->delete('tamil_table');
    }

    // 
    public function hindi_reviews_table($data) {
        $this->load->database();
        return $this->db->insert('hindi_table',$data);
    }
    public function get_hindi() {
        $this->load->database();
        return $this->db->get('hindi_table')->result();

    }
    public function hindi_desc($id) {
        $this->load->database();
        $this->db->where('id',$id);
       return $this->db->get('hindi_table')->result();
    }
    public function editing_hindi($id) {
        $this->load->database();
        $this->db->where('id',$id);
       return $this->db->get('hindi_table')->result();
    }
    public function update_hindi($data, $edit_id) {
        $this->load->database();
        $this->db->where('id',$edit_id);
       return $this->db->update('hindi_table',$data);
    }
    public function delete_hindi($id) {
        $this->load->database();
        $this->db->where('id',$id);
       return $this->db->delete('hindi_table');
    }

    // 
    public function english_reviews_table($data) {
        $this->load->database();
        return $this->db->insert('english_table',$data);
    }
    public function get_english() {
        $this->load->database();
        return $this->db->get('english_table')->result();

    }
    public function english_desc($id) {
        $this->load->database();
        $this->db->where('id',$id);
       return $this->db->get('english_table')->result();
    }
    public function editing_english($id) {
        $this->load->database();
        $this->db->where('id',$id);
       return $this->db->get('english_table')->result();
    }
    public function update_english($data, $edit_id) {
        $this->load->database();
        $this->db->where('id',$edit_id);
       return $this->db->update('english_table',$data);
    }
    public function delete_english($id) {
        $this->load->database();
        $this->db->where('id',$id);
       return $this->db->delete('english_table');
    }

    // 
    public function tamil_web_table($data) {
        $this->load->database();
        return $this->db->insert('tamil_web_table',$data);
    }
    public function get_tamilweb() {
        $this->load->database();
        return $this->db->get('tamil_web_table')->result();

    }
    public function tamilwebseries_desc($id) {
        $this->load->database();
        $this->db->where('id',$id);
       return $this->db->get('tamil_web_table')->result();
    }
    public function editing_tamilwebseries($id) {
        $this->load->database();
        $this->db->where('id',$id);
       return $this->db->get('tamil_web_table')->result();
    }
    public function update_tamilwebseries($data, $edit_id) {
        $this->load->database();
        $this->db->where('id',$edit_id);
       return $this->db->update('tamil_web_table',$data);
    }
    public function delete_tamilwebseries($id) {
        $this->load->database();
        $this->db->where('id',$id);
       return $this->db->delete('tamil_web_table');
    }

    // 
    public function kollywood_table($data) {
        $this->load->database();
        return $this->db->insert('kollywood_table',$data);
    }
    public function get_kollywood() {
        $this->load->database();
        return $this->db->get('kollywood_table')->result();

    }
    public function kollywood_desc($id) {
        $this->load->database();
        $this->db->where('id',$id);
       return $this->db->get('kollywood_table')->result();
    }
    public function editing_kollywood($id) {
        $this->load->database();
        $this->db->where('id',$id);
       return $this->db->get('kollywood_table')->result();
    }
    public function update_kollywood($data, $edit_id) {
        $this->load->database();
        $this->db->where('id',$edit_id);
       return $this->db->update('kollywood_table',$data);
    }
    public function delete_kollywood($id) {
        $this->load->database();
        $this->db->where('id',$id);
       return $this->db->delete('kollywood_table');
    }

    // 
    public function bollywood_table($data) {
        $this->load->database();
        return $this->db->insert('bollywood_table',$data);
    }
    public function get_bollywood() {
        $this->load->database();
        return $this->db->get('bollywood_table')->result();

    }
    public function bollywood_desc($id) {
        $this->load->database();
        $this->db->where('id',$id);
       return $this->db->get('bollywood_table')->result();
    }
    public function editing_bollywood($id) {
        $this->load->database();
        $this->db->where('id',$id);
       return $this->db->get('bollywood_table')->result();
    }
    public function update_bollywood($data, $edit_id) {
        $this->load->database();
        $this->db->where('id',$edit_id);
       return $this->db->update('bollywood_table',$data);
    }
    public function delete_bollywood($id) {
        $this->load->database();
        $this->db->where('id',$id);
       return $this->db->delete('bollywood_table');
    }

    // 
    public function hollywood_table($data) {
        $this->load->database();
        return $this->db->insert('hollywood_table',$data);
    }
    public function get_hollywood() {
        $this->load->database();
        return $this->db->get('hollywood_table')->result();

    }
    public function hollywood_desc($id) {
        $this->load->database();
        $this->db->where('id',$id);
       return $this->db->get('hollywood_table')->result();
    }
    public function editing_hollywood($id) {
        $this->load->database();
        $this->db->where('id',$id);
       return $this->db->get('hollywood_table')->result();
    }
    public function update_hollywood($data, $edit_id) {
        $this->load->database();
        $this->db->where('id',$edit_id);
       return $this->db->update('hollywood_table',$data);
    }
    public function delete_hollywood($id) {
        $this->load->database();
        $this->db->where('id',$id);
       return $this->db->delete('hollywood_table');
    }

    // 
    public function celebrity_table($data) {
        $this->load->database();
        return $this->db->insert('celebrity_table',$data);
    }
    public function get_celebrity() {
        $this->load->database();
        return $this->db->get('celebrity_table')->result();

    }
    public function celebrity_desc($id) {
        $this->load->database();
        $this->db->where('id',$id);
       return $this->db->get('celebrity_table')->result();
    }
    public function editing_celebrity($id) {
        $this->load->database();
        $this->db->where('id',$id);
       return $this->db->get('celebrity_table')->result();
    }
    public function update_celebrity($data, $edit_id) {
        $this->load->database();
        $this->db->where('id',$edit_id);
       return $this->db->update('celebrity_table',$data);
    }
    public function delete_celebrity($id) {
        $this->load->database();
        $this->db->where('id',$id);
       return $this->db->delete('celebrity_table');
    }

    // 
    public function interviews_table($data) {
        $this->load->database();
        return $this->db->insert('interviews_table',$data);
    }
    public function get_interviews() {
        $this->load->database();
        return $this->db->get('interviews_table')->result();

    }
    public function interviews_desc($id) {
        $this->load->database();
        $this->db->where('id',$id);
       return $this->db->get('interviews_table')->result();
    }
    public function editing_interviews($id) {
        $this->load->database();
        $this->db->where('id',$id);
       return $this->db->get('interviews_table')->result();
    }
    public function update_interviews($data, $edit_id) {
        $this->load->database();
        $this->db->where('id',$edit_id);
       return $this->db->update('interviews_table',$data);
    }
    public function delete_interviews($id) {
        $this->load->database();
        $this->db->where('id',$id);
       return $this->db->delete('interviews_table');
    }
    // 
    public function gossips_table($data) {
        $this->load->database();
        return $this->db->insert('gossips_table',$data);
    }
    public function get_gossips() {
        $this->load->database();
        return $this->db->get('gossips_table')->result();

    }
    public function gossips_desc($id) {
        $this->load->database();
        $this->db->where('id',$id);
       return $this->db->get('gossips_table')->result();
    }
    public function editing_gossips($id) {
        $this->load->database();
        $this->db->where('id',$id);
       return $this->db->get('gossips_table')->result();
    }
    public function update_gossips($data, $edit_id) {
        $this->load->database();
        $this->db->where('id',$edit_id);
       return $this->db->update('gossips_table',$data);
    }
    public function delete_gossips($id) {
        $this->load->database();
        $this->db->where('id',$id);
       return $this->db->delete('gossips_table');
    }
    // 
    public function video_table($data) {
        $this->load->database();
        return $this->db->insert('video_table',$data);
    }
    public function get_video() {
        $this->load->database();
        return $this->db->get('video_table')->result();

    }
    public function video_desc($id) {
        $this->load->database();
        $this->db->where('id',$id);
       return $this->db->get('video_table')->result();
    }
    public function editing_video($id) {
        $this->load->database();
        $this->db->where('id',$id);
       return $this->db->get('video_table')->result();
    }
    public function update_video($data, $edit_id) {
        $this->load->database();
        $this->db->where('id',$edit_id);
       return $this->db->update('video_table',$data);
    }
    public function delete_video($id) {
        $this->load->database();
        $this->db->where('id',$id);
       return $this->db->delete('video_table');
    }
    // 
    public function banners_table($data) {
        $this->load->database();
        return $this->db->insert('banners_table',$data);
    }
    public function get_banner() {
        $this->load->database();
        return $this->db->get('banners_table')->result();

    }
    public function banner_desc($id) {
        $this->load->database();
        $this->db->where('id',$id);
       return $this->db->get('banners_table')->result();
    }
    public function editing_banner($id) {
        $this->load->database();
        $this->db->where('id',$id);
       return $this->db->get('banners_table')->result();
    }
    public function update_banner($data, $edit_id) {
        $this->load->database();
        $this->db->where('id',$edit_id);
       return $this->db->update('banners_table',$data);
    }
    public function delete_banner($id) {
        $this->load->database();
        $this->db->where('id',$id);
       return $this->db->delete('banners_table');
    }

    // 
    public function photos_table($data) {
        $this->load->database();
        return $this->db->insert('photos_table',$data);
    }
    public function get_photos() {
        $this->load->database();
        return $this->db->get('photos_table')->result();

    }
    public function photos_desc($id) {
        $this->load->database();
        $this->db->where('id',$id);
       return $this->db->get('photos_table')->result();
    }
    public function editing_photos($id) {
        $this->load->database();
        $this->db->where('id',$id);
       return $this->db->get('photos_table')->result();
    }
    public function update_photos($data, $edit_id) {
        $this->load->database();
        $this->db->where('id',$edit_id);
       return $this->db->update('photos_table',$data);
    }
    public function delete_photos($id) {
        $this->load->database();
        $this->db->where('id',$id);
       return $this->db->delete('photos_table');
    }
    // 
    public function events_table($data) {
        $this->load->database();
        return $this->db->insert('events_table',$data);
    }
    public function get_events() {
        $this->load->database();
        return $this->db->get('events_table')->result();

    }
    public function events_desc($id) {
        $this->load->database();
        $this->db->where('id',$id);
       return $this->db->get('events_table')->result();
    }
    public function editing_events($id) {
        $this->load->database();
        $this->db->where('id',$id);
       return $this->db->get('events_table')->result();
    }
    public function update_events($data, $edit_id) {
        $this->load->database();
        $this->db->where('id',$edit_id);
       return $this->db->update('events_table',$data);
    }
    public function delete_events($id) {
        $this->load->database();
        $this->db->where('id',$id);
       return $this->db->delete('events_table');
    }
    // 
}
?>