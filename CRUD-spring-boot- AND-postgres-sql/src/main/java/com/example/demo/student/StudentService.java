package com.example.demo.student;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import javax.transaction.Transactional;
import java.time.LocalDate;
import java.util.List;
import java.util.Objects;
import java.util.Optional;

@Service
public class StudentService {
    private final StudentRepository studentRepository;
    @Autowired
    public StudentService(StudentRepository studentRepository) {
        this.studentRepository = studentRepository;
    }

    public List<Student> getStudents() {
        return studentRepository.findAll();
    }

    public void createStudent(Student student) {
       Optional<Student> optional= studentRepository.findStudentByEmail(student.getEmail());
        if(optional.isPresent()){
            throw new IllegalStateException("email taken");
        }
        studentRepository.save(student);
        System.out.println(student );
    }

    public void deleteStudent(Long studentId) {
       boolean exist= studentRepository.existsById(studentId);
       if(!exist){
           throw new IllegalStateException("student with ID"+ studentId + "  does not exist");
       }
       studentRepository.deleteById(studentId);
    }
    @Transactional
    public void updateStudent(Long studentId, String name, String email) {
        Student student = studentRepository.findById(studentId).
                orElseThrow(() -> new IllegalStateException("Student with ID " + studentId + " does not exist"));
        if(name != null && name.length() > 0 && !Objects.equals(student.getName(),name)){
                student.setName(name);
        }
        if(email != null && email.length() > 0 && !Objects.equals(student.getEmail(),email)){
            Optional<Student> optional= studentRepository.findStudentByEmail(student.getEmail());
            if(optional.isPresent()){
                throw new IllegalStateException("email taken");
            }
            student.setEmail(email);
        }
    }
}
