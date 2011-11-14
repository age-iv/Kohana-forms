<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Acts as an object wrapper for HTML pages with embedded PHP, called "views".
 * Variables can be assigned with the view object and referenced locally within
 * the view.
 *
 * @package    Kohana
 * @category   Base
 * @author     Kohana Team
 * @copyright  (c) 2008-2011 Kohana Team
 * @license    http://kohanaframework.org/license
 */
class View extends Kohana_View {

	/**
	 * @staticvar view_path a directory that will be used to generate views
	 */
	public static $view_path = NULL;

	/**
	 * Sets the view filename.
	 *
	 *     $view->set_filename($file);
	 *
	 * @param   string  view filename
	 * @return  View
	 * @throws  View_Exception
	 */
	public function set_filename($file)
	{
		$directory = 'views';
		if (! is_null(View::$view_path)) {
			$directory .= DIRECTORY_SEPARATOR.View::$view_path;
		}
		if (($path = Kohana::find_file($directory, $file)) === FALSE)
		{
			throw new View_Exception('The requested view :file could not be found in :directory', array(
				':file' => $file,
				':directory' => $directory,
			));
		}

		// Store the file path locally
		$this->_file = $path;

		return $this;
	}
}