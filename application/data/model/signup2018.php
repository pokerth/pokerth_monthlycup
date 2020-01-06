<?php
/**
 * application_data_model_signup2018
 *
 * Stellt alle Daten der Tabelle Moderator zur Verfügung
 *
 */
class model_signup2018 extends model_base
{

	public function __construct()
	{
		parent::__construct('signup2018');
	}

	/*
	 * get_entry_by_id()
	 *
	 * @param String $signup2018_id
	 *
	 * @return Object
	 */
	public static function get_entry_by_id($signup2018_id)
	{
		// debug::add_info("(".__FILE__.")<b>".__CLASS__."</b>::".__FUNCTION__."($signup2018_id) betreten.");
		return data_entry::get_by_filter
		(
			$table = 'signup2018',
			$filter = array
			(
				'signup2018_id' => $signup2018_id
			),
			$single = true
		);
	}

	/*
	 * get_entries_by_client_id()
	 *
	 * @param String $client_id
	 *
	 * @return Object
	 */
	public static function get_entries_by_month($month)
	{
		// debug::add_info("(".__FILE__.")<b>".__CLASS__."</b>::".__FUNCTION__."($signup2018_id) betreten.");
		return data_entry::get_by_filter
		(
			$table = 'signup2018',
			$filter = array
			(
				'month' => intval($month)
			),
			$single = false,
			$order_by = array("field" => "date", "direction", "desc")
		);
	}
	
	public static function get_public_valid_entries_by_month($month)
	{
		// debug::add_info("(".__FILE__.")<b>".__CLASS__."</b>::".__FUNCTION__."($signup2018_id) betreten.");
		return data_entry::get_by_filter
		(
			$table = 'signup2018',
			$filter = array
			(
				'month' => intval($month),
				'valid' => 1
			),
			$single = false,
			$order_by = array("field" => "date", "direction", "desc")
		);
	}
	/*
	 * get_signup2018_by_playername()
	 *
	 * @param String $username
	 *
	 * @return Object
	 */
	public static function get_entry_by_playername($playername)
	{
		// debug::add_info("(".__FILE__.")<b>".__CLASS__."</b>::".__FUNCTION__."() betreten.");
		return data_entry::get_by_filter
		(
			$table = 'signup2018',
			$filter = array
			(
				'playername' => $playername
			),
			$single = true
		);
	}
	
	/*
	 * get_signup2018_by_month_playername()
	 *
	 * @param String $username
	 *
	 * @return Object
	 */
	public static function get_entry_by_month_playername($month, $playername)
	{
		// debug::add_info("(".__FILE__.")<b>".__CLASS__."</b>::".__FUNCTION__."() betreten.");
		return data_entry::get_by_filter
		(
			$table = 'signup2018',
			$filter = array
			(
				'month' => $month,
				'playername' => $playername
			),
			$single = true
		);
	}

	/*
	 * get_all_entries()
	 *
	 *
	 * @return Array of Objects
	 */
	public static function get_all_entries()
	{
		// debug::add_info("(".__FILE__.")<b>".__CLASS__."</b>::".__FUNCTION__."() betreten.");
		return data_entry::get_all('signup2018', __CLASS__);
	}

	/*
	 * delete_entry_by_id()
	 *
	 * @param String $signup2018_id
	 *
	 * @return Object
	 */
	public static function delete_entry_by_id($signup2018_id)
	{
		// debug::add_info("(".__FILE__.")<b>".__CLASS__."</b>::".__FUNCTION__."($signup2018_id) betreten.");
		$db = database::get_instance();
		$signup2018_id = $db->escape($signup2018_id);
		$sql = "
			DELETE FROM `signup2018` WHERE `signup2018_id` = $signup2018_id;
		";
		return $db->query($sql);
	}

}
