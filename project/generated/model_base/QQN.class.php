<?php
	class QQN {
		/**
		 * @return QQNodeAlternativa
		 */
		static public function Alternativa() {
			return new QQNodeAlternativa('alternativa', null, null);
		}
		/**
		 * @return QQNodeEvaluacion
		 */
		static public function Evaluacion() {
			return new QQNodeEvaluacion('evaluacion', null, null);
		}
		/**
		 * @return QQNodePregunta
		 */
		static public function Pregunta() {
			return new QQNodePregunta('pregunta', null, null);
		}
	}