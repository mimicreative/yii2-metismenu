<?php
/**
 * Created by PhpStorm.
 * User: Haqqi
 * Date: 10/21/2016
 * Time: 9:37 PM
 */

namespace mimicreative\metismenu;


use yii\web\AssetBundle;

class MetisMenuAsset extends AssetBundle {
  /**
   * @inherit
   */
  public $sourcePath = '@vendor/onokumus/metismenu';

  public $depends = [
    'yii\web\JqueryAsset'
  ];

  /**
   * @inherit
   */
  public $js = [
    'dist/metisMenu.min.js',
  ];

  public $css = [
    'dist/metisMenu.min.css'
  ];

  /**
   * Initializes the bundle.
   * Set publish options to copy only necessary files (in this case css and font folders)
   */
  public function init()
  {
    parent::init();

    $this->publishOptions['beforeCopy'] = function ($from, $to) {
      return preg_match('%(/|\\\\)dist%', $from);
    };
  }
}