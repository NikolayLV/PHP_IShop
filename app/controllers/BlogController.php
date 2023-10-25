<?php


	namespace app\controllers;


	use app\models\Breadcrumbs;
	use app\models\Blog;
	use wfm\App;

	/** @property Product $model */
	class BlogController extends AppController
	{

		public function viewAction()
		{
			$lang = App::$app->getProperty('language');
			$blog = $this->model->get_blog($this->route['slug'], $lang);

			if (!$blog) {
				//            throw new \Exception("Товар по запросу {$this->route['slug']} не найден", 404);
				$this->error_404();
				return;
			}

			$breadcrumbs = Breadcrumbs::getBreadcrumbs($blog['category_id'], $blog['title']);

			//$gallery = $this->model->get_gallery($blog['id']);
			$this->setMeta($blog['title'], $blog['description'], $blog['keywords']);
			$this->set(compact('blog',  'breadcrumbs'));
		}

	}