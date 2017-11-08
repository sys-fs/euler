(defun square (x)
  (* x x))

(defun euler-6 ()
  (let ((x (loop for i from 1 to 100 by 1
			 collect i)))
    (- (square (reduce #'+ x)) ; square of the sum
       (reduce #'+ (mapcar #'square x))))) ; sum of squares
