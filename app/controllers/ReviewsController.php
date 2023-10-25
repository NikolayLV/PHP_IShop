<?php


	namespace app\controllers;


	use app\models\Breadcrumbs;
	use app\models\Blog;
	use wfm\App;

	/** @property Product $model */
	class ReviewsController extends AppController
	{

		public function viewAction()
		{
			$lang = App::$app->getProperty('language');
			$this->setMeta(___('wishlist_index_title'));
		}

	}