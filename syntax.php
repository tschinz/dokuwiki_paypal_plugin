<?php
/*
 * DokuWiki paypal plugin
 * Author : Zahno Silvan
 * Usage:
 * {{paypal>encrypted_value}} 
 * 
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the LGNU Lesser General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * LGNU Lesser General Public License for more details.
 * 
 * You should have received a copy of the LGNU Lesser General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
 */
 

if(!defined('DOKU_INC')) define('DOKU_INC',realpath(dirname(__FILE__).'/../../').'/');
if(!defined('DOKU_PLUGIN')) define('DOKU_PLUGIN',DOKU_INC.'lib/plugins/');
require_once(DOKU_PLUGIN.'syntax.php');

/**
 * All DokuWiki plugins to extend the parser/rendering mechanism
 * need to inherit from this class
 */
class syntax_plugin_paypal extends DokuWiki_Syntax_Plugin {

    /**
     * return some info
     */
    function getInfo(){
        return array(
            'author' => 'Zahno Silvan',
            'email'  => 'zaswiki@gmail.com',
            'date'   => '2011-02-17',
            'name'   => 'Paypal Plugin',
            'desc'   => 'Embedding PayPal Donation Button',
            'url'    => 'http://zawiki.zapto.org/doku.php/tschinz:dw_paypal',
        );
    }

    /**
     * What kind of syntax are we?
     */
    function getType(){
        return 'substition';
    }

    /**
     * Where to sort in?
     */
    function getSort(){
        return 299;
    }


    /**
     * Connect pattern to lexer
     */
    function connectTo($mode) {
      $this->Lexer->addSpecialPattern('\{\{paypal>.*?\}\}',$mode,'plugin_paypal');
    }

    /**
     * Handle the match
     */
    function handle($match, $state, $pos, &$handler){
        switch ($state) {
          case DOKU_LEXER_ENTER :
            break;
          case DOKU_LEXER_MATCHED :
            break;
          case DOKU_LEXER_UNMATCHED :
            break;
          case DOKU_LEXER_EXIT :
            break;
          case DOKU_LEXER_SPECIAL :
            return $match;
            break;
        }
        return array();
    }

    /**
     * Create output
     */
    function render($mode, &$renderer, $data) {
        if($mode == 'xhtml'){
			// strip {{paypal> from start
			$data = substr($data,9);
            // strip }} from end
			$data = substr($data,0,-2);
			$encrypted_value = $data;

			if (empty($encrypted_value))
			{
				$renderer->doc .= 'No encrypted value given';
				return true;
			}

			$renderer->doc .= '<form action="https://www.paypal.com/cgi-bin/webscr" method="post">';
			$renderer->doc .= '<input type="hidden" name="cmd" value="_s-xclick">';
			$renderer->doc .= '<input type="hidden" name="encrypted" value="'.$encrypted_value.'">';
			$renderer->doc .= '<input type="image" src="https://www.paypal.com/en_US/CH/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">';
			$renderer->doc .= '<img alt="" border="0" src="https://www.paypal.com/de_DE/i/scr/pixel.gif" width="1" height="1">';
			$renderer->doc .= '</form>';
			
            return true;
        }
        return false;
    }
}
