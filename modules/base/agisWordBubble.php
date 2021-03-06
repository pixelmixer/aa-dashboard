<?php

//
// Open Web Analytics - An Open Source Web Analytics Framework
//
// Copyright 2006 Peter Adams. All rights reserved.
//
// Licensed under GPL v2.0 http://www.gnu.org/copyleft/gpl.html
//
// Unless required by applicable law or agreed to in writing, software
// distributed under the License is distributed on an "AS IS" BASIS,
// WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
// See the License for the specific language governing permissions and
// limitations under the License.
//
// $Id$
//

require_once(OWA_BASE_DIR.'/owa_reportController.php');

/**
 * Goal Funnel Report Controller
 * 
 * @author      Peter Adams <peter@openwebanalytics.com>
 * @copyright   Copyright &copy; 2006 Peter Adams <peter@openwebanalytics.com>
 * @license     http://www.gnu.org/copyleft/gpl.html GPL v2.0
 * @category    owa
 * @package     owa
 * @version        $Revision$
 * @since        owa 1.4.0
 */

class owa_agisWordBubbleController extends owa_reportController {

    function action() {

        $gm = owa_coreAPI::supportClassFactory('base', 'goalManager', $this->getParam( 'siteId' ) );

        $goal_number = $this->getParam('goalNumber');

        if ( ! $goal_number ) {
            $goal_number = 1;
        }

        $goal = $gm->getGoal($goal_number);
        $funnel = $gm->getGoalFunnel($goal_number);

        if ( $funnel ) {
            $goal = $gm->getGoal($goal_number);
            // find required steps. build a constraint string.
            $required_step_constraints = '';
            $steps_count = count($funnel);
            for ($i=1; $i <= $steps_count ;$i++ ) {

                if (array_key_exists('is_required', $funnel[$i]) && $funnel[$i]['is_required'] === true) {

                    $required_step_constraints .= 'pagePath=='.$funnel[$i]['url'].',';
                }
            }
            $required_step_constraints = trim($required_step_constraints, ',');

            //print $required_step_constraints;
            // get total visits
            $total_visitors_rs = owa_coreAPI::executeApiCommand(array(
                    'period'       => $this->get('period'),
                    'startDate'      => $this->get('startDate'),
                    'endDate'      => $this->get('endDate'),
                    'constraints' => $required_step_constraints,
                    'metrics'       => 'visitors',
                    'do'          => 'getResultSet',
                    'siteId'      => $this->getParam( 'siteId' )
            ));
<<<<<<< HEAD
=======
            //Console::log('Begin logging data');
            //console.log('Mooooooo');
            //print_r('Moooooooo');
>>>>>>> 90e633454796fd96c46622503d3595addd3795e7
            //print_r($total_visitors_rs);
            $total_visitors = $total_visitors_rs->getAggregateMetric( 'visitors' );
            //print "Total visits: $total_visitors";

            $this->set( 'total_visitors',  $total_visitors);
            // get visits for each step

            // add goal url to steps array
            $funnel[] = array('url' => $goal['details']['goal_url'], 'name' => $goal['goal_name'], 'step_number' => $steps_count + 1);
            foreach ( $funnel as $k => $step ) {
                $operator = '==';
                $rs = owa_coreAPI::executeApiCommand(array(
                        'period'       => $this->get('period'),
                        'startDate'      => $this->get('startDate'),
                        'endDate'      => $this->get('endDate'),
                        'metrics'       => 'visitors',
                        'constraints' => 'pagePath'.$operator.$step['url'],
                        'do'          => 'getResultSet',
                        'siteId'      => $this->getParam( 'siteId' )
                ));

                $visitors = $rs->getAggregateMetric('visitors') ? $rs->getAggregateMetric('visitors'): 0;
                $funnel[$k]['visitors'] = $visitors;

                // backfill check in case there are more visitors to this step than were at prior step.
                if ($funnel[$k]['visitors'] <= $funnel[$k-1]['visitors']) {
                    if ($funnel[$k-1]['visitors'] > 0 ) {
                        $funnel[$k]['visitor_percentage'] = round($funnel[$k]['visitors'] / $funnel[$k-1]['visitors'], 4) * 100 . '%';
                    } else {
                        $funnel[$k]['visitor_percentage'] = '0.00%';
                    }
                } else {
                    $funnel[$k]['visitor_percentage'] = '100%';
                }
            }

            //print_r($funnel);

            $goal_step = end($funnel);
            $goal_conversion_rate = round($goal_step['visitors'] / $total_visitors, 2) * 100 . '%';
            $this->set('goal_conversion_rate', $goal_conversion_rate);
            $this->set('funnel', $funnel);

        }
        // set view stuff
        $this->setSubview('base.agisWordBubble');
        #$this->setTitle('Funnel Visualization:', 'Goal ' . $goal_number);
        $this->setTitle('Agis Word Bubble');
        #$this->set('goal_number', $goal_number);
    }
}

require_once(OWA_BASE_DIR.'/owa_view.php');

/**
 * Goal Funnel Report View
 * 
 * @author      Peter Adams <peter@openwebanalytics.com>
 * @copyright   Copyright &copy; 2006 Peter Adams <peter@openwebanalytics.com>
 * @license     http://www.gnu.org/copyleft/gpl.html GPL v2.0
 * @category    owa
 * @package     owa
 * @version        $Revision$
 * @since        owa 1.4.0
 */

class owa_AgisWordBubbleView extends owa_view {

    function render() {
	#echo "Hello world";
        $this->body->set_template('agisWordBubble_template.php');
        #$this->body->set('funnel', $this->get('funnel'));
        #$this->body->set('funnel_json', json_encode($this->get('funnel')));
        #$this->body->set('goal_conversion_rate', $this->get('goal_conversion_rate'));
        #$this->body->set('numGoals', owa_coreAPI::getSetting('base', 'numGoals') );
        #$this->body->set('goal_number',  $this->get('goal_number') );
<<<<<<< HEAD
=======
        #$this->body->set('siteID',  $this->get('siteId') );
        
        #$this->getParam( 'siteId' )
>>>>>>> 90e633454796fd96c46622503d3595addd3795e7
    }
}

?>
